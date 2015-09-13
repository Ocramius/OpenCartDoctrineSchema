<?php

use Doctrine\Common\Collections\Collection;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Reflection\ClassReflection;

/* @var $entityManager \Doctrine\ORM\EntityManager */
$entityManager = require __DIR__ . '/bootstrap-entitymanager.php';

// this code is just shoot-and-throw-away, so please don't look at the CCLOC

/* @var $metadataClass \Doctrine\ORM\Mapping\ClassMetadata */
foreach ($entityManager->getMetadataFactory()->getAllMetadata() as $metadataClass) {
    $requiredParameters = [];
    $optionalParameters = [];

    foreach ($metadataClass->getAssociationNames() as $fieldName) {
        if ($metadataClass->isSingleValuedAssociation($fieldName)) {

            $parameter = new ParameterGenerator($fieldName, $metadataClass->getAssociationTargetClass($fieldName));
            $associationMapping = $metadataClass->getAssociationMapping($fieldName);

            if (
                isset($associationMapping['joinColumns'][0]['nullable'])
                && $associationMapping['joinColumns'][0]['nullable']
            ) {
                $parameter->setDefaultValue(null);
                $optionalParameters[] = $parameter;
            } else {
                $requiredParameters[] = $parameter;
            }

            continue;
        }

        $requiredParameters[] = new ParameterGenerator($fieldName, Collection::class);
    }

    foreach ($metadataClass->getFieldNames() as $fieldName) {
        if (
            in_array($fieldName, $metadataClass->getIdentifierFieldNames(), true)
            && $metadataClass->isIdGeneratorIdentity()
        ) {
            // auto-incremental identifier, skip it.
            continue;
        }

        $fieldMapping = $metadataClass->getFieldMapping($fieldName);

        $type = null;

        if ('datetime' === $fieldMapping['type']) {
            $type = 'DateTime';
        }

        $parameter = new ParameterGenerator($fieldName, $type);

        if (isset($fieldMapping['nullable']) && $fieldMapping['nullable']) {
            $parameter->setDefaultValue(null);
            $optionalParameters[] = $parameter;
        } else {
            $requiredParameters[] = $parameter;
        }
    }

    $classGenerator = ClassGenerator::fromReflection(new ClassReflection($metadataClass->getName()));

    $classGenerator->removeMethod('__construct');

    $classGenerator->addMethodFromGenerator(new MethodGenerator(
        '__construct',
        array_merge($requiredParameters, $optionalParameters),
        MethodGenerator::FLAG_PUBLIC,
        implode(
            "\n",
            array_map(
                function (ParameterGenerator $parameterGenerator) {
                    $name = $parameterGenerator->getName();

                    return '$this->' . $name . ' = $' . $name . ';';
                },
                array_merge($requiredParameters, $optionalParameters)
            )
        )
    ));

    file_put_contents(
        $metadataClass->getReflectionClass()->getFileName(),
        preg_replace(
            '/private \\$([A-Za-z0-9]+) = null;/i',
            'private \$${1};',
            "<?php\n\n\n" . $classGenerator->generate()
        )
    );
}
