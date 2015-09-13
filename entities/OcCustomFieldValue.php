<?php


/**
 * OcCustomFieldValue
 */
class OcCustomFieldValue
{

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $customFieldValueId;

    /**
     * @var \OcCustomField
     */
    private $customField;

    public function __construct(OcCustomField $customField, $sortOrder)
    {
        $this->$customField;
        $this->$sortOrder;
    }


}
