<?php

use Doctrine\DBAL\Driver\PDOMySql\Driver;
use Doctrine\DBAL\Logging\EchoSQLLogger;
use Doctrine\ORM\Configuration;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\XmlDriver;
use Doctrine\ORM\Proxy\ProxyFactory;

require_once __DIR__ . '/vendor/autoload.php';

$configuration = new Configuration();

$configuration->setMetadataDriverImpl(new XmlDriver([__DIR__ . '/mappings']));
$configuration->setProxyDir(sys_get_temp_dir() . '/example' . uniqid('', true));
$configuration->setProxyNamespace('ProxyExample');
$configuration->setAutoGenerateProxyClasses(ProxyFactory::AUTOGENERATE_EVAL);

$entityManager = EntityManager::create(
    [
        'driverClass' => Driver::class,
        'user'        => 'root',
        'password'    => null,
        'dbname'      => 'opencart_fixed',
    ],
    $configuration
);

//$configuration->setSQLLogger(new EchoSQLLogger());

$entityManager->getConnection()->getDatabasePlatform()->registerDoctrineTypeMapping('enum', 'string');

return $entityManager;
