<?php



/**
 * OcOrderCustomField
 */
class OcOrderCustomField
{
    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $customFieldId;

    /**
     * @var integer
     */
    private $customFieldValueId;

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
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OcOrderCustomField
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set customFieldId
     *
     * @param integer $customFieldId
     *
     * @return OcOrderCustomField
     */
    public function setCustomFieldId($customFieldId)
    {
        $this->customFieldId = $customFieldId;

        return $this;
    }

    /**
     * Get customFieldId
     *
     * @return integer
     */
    public function getCustomFieldId()
    {
        return $this->customFieldId;
    }

    /**
     * Set customFieldValueId
     *
     * @param integer $customFieldValueId
     *
     * @return OcOrderCustomField
     */
    public function setCustomFieldValueId($customFieldValueId)
    {
        $this->customFieldValueId = $customFieldValueId;

        return $this;
    }

    /**
     * Get customFieldValueId
     *
     * @return integer
     */
    public function getCustomFieldValueId()
    {
        return $this->customFieldValueId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcOrderCustomField
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return OcOrderCustomField
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return OcOrderCustomField
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return OcOrderCustomField
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Get orderCustomFieldId
     *
     * @return integer
     */
    public function getOrderCustomFieldId()
    {
        return $this->orderCustomFieldId;
    }
}

