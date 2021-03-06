<?php


/**
 * OcCustomFieldValueDescription
 */
class OcCustomFieldValueDescription
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var \OcCustomFieldValue
     */
    private $customFieldValue;

    /**
     * @var \OcLanguage
     */
    private $language;

    /**
     * @var \OcCustomField
     */
    private $customField;

    public function __construct(OcCustomFieldValue $customFieldValue, OcLanguage $language, OcCustomField $customField, $name)
    {
        $this->customFieldValue = $customFieldValue;
        $this->language = $language;
        $this->customField = $customField;
        $this->name = $name;
    }


}
