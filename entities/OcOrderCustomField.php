<?php


/**
 * OcOrderCustomField
 */
class OcOrderCustomField
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $location;

    /**
     * @var integer
     */
    private $orderCustomFieldId;

    /**
     * @var \OcCustomField
     */
    private $customField;

    /**
     * @var \OcOrder
     */
    private $order;

    /**
     * @var \OcCustomFieldValue
     */
    private $customFieldValue;

    public function __construct(OcCustomField $customField, OcOrder $order, OcCustomFieldValue $customFieldValue, $name, $value, $type, $location)
    {
        $this->$customField;
        $this->$order;
        $this->$customFieldValue;
        $this->$name;
        $this->$value;
        $this->$type;
        $this->$location;
    }


}
