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
        $this->customField = $customField;
        $this->order = $order;
        $this->customFieldValue = $customFieldValue;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->location = $location;
    }


}
