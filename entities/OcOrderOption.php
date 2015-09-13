<?php



/**
 * OcOrderOption
 */
class OcOrderOption
{
    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $orderProductId;

    /**
     * @var integer
     */
    private $productOptionId;

    /**
     * @var integer
     */
    private $productOptionValueId = '0';

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
     * @var integer
     */
    private $orderOptionId;


    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OcOrderOption
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
     * Set orderProductId
     *
     * @param integer $orderProductId
     *
     * @return OcOrderOption
     */
    public function setOrderProductId($orderProductId)
    {
        $this->orderProductId = $orderProductId;

        return $this;
    }

    /**
     * Get orderProductId
     *
     * @return integer
     */
    public function getOrderProductId()
    {
        return $this->orderProductId;
    }

    /**
     * Set productOptionId
     *
     * @param integer $productOptionId
     *
     * @return OcOrderOption
     */
    public function setProductOptionId($productOptionId)
    {
        $this->productOptionId = $productOptionId;

        return $this;
    }

    /**
     * Get productOptionId
     *
     * @return integer
     */
    public function getProductOptionId()
    {
        return $this->productOptionId;
    }

    /**
     * Set productOptionValueId
     *
     * @param integer $productOptionValueId
     *
     * @return OcOrderOption
     */
    public function setProductOptionValueId($productOptionValueId)
    {
        $this->productOptionValueId = $productOptionValueId;

        return $this;
    }

    /**
     * Get productOptionValueId
     *
     * @return integer
     */
    public function getProductOptionValueId()
    {
        return $this->productOptionValueId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcOrderOption
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
     * @return OcOrderOption
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
     * @return OcOrderOption
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
     * Get orderOptionId
     *
     * @return integer
     */
    public function getOrderOptionId()
    {
        return $this->orderOptionId;
    }
}

