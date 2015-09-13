<?php



/**
 * OcProductOptionValue
 */
class OcProductOptionValue
{
    /**
     * @var integer
     */
    private $productOptionId;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $optionId;

    /**
     * @var integer
     */
    private $optionValueId;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var boolean
     */
    private $subtract;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $pricePrefix;

    /**
     * @var integer
     */
    private $points;

    /**
     * @var string
     */
    private $pointsPrefix;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $weightPrefix;

    /**
     * @var integer
     */
    private $productOptionValueId;


    /**
     * Set productOptionId
     *
     * @param integer $productOptionId
     *
     * @return OcProductOptionValue
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
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductOptionValue
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set optionId
     *
     * @param integer $optionId
     *
     * @return OcProductOptionValue
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get optionId
     *
     * @return integer
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set optionValueId
     *
     * @param integer $optionValueId
     *
     * @return OcProductOptionValue
     */
    public function setOptionValueId($optionValueId)
    {
        $this->optionValueId = $optionValueId;

        return $this;
    }

    /**
     * Get optionValueId
     *
     * @return integer
     */
    public function getOptionValueId()
    {
        return $this->optionValueId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return OcProductOptionValue
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set subtract
     *
     * @param boolean $subtract
     *
     * @return OcProductOptionValue
     */
    public function setSubtract($subtract)
    {
        $this->subtract = $subtract;

        return $this;
    }

    /**
     * Get subtract
     *
     * @return boolean
     */
    public function getSubtract()
    {
        return $this->subtract;
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return OcProductOptionValue
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set pricePrefix
     *
     * @param string $pricePrefix
     *
     * @return OcProductOptionValue
     */
    public function setPricePrefix($pricePrefix)
    {
        $this->pricePrefix = $pricePrefix;

        return $this;
    }

    /**
     * Get pricePrefix
     *
     * @return string
     */
    public function getPricePrefix()
    {
        return $this->pricePrefix;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return OcProductOptionValue
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set pointsPrefix
     *
     * @param string $pointsPrefix
     *
     * @return OcProductOptionValue
     */
    public function setPointsPrefix($pointsPrefix)
    {
        $this->pointsPrefix = $pointsPrefix;

        return $this;
    }

    /**
     * Get pointsPrefix
     *
     * @return string
     */
    public function getPointsPrefix()
    {
        return $this->pointsPrefix;
    }

    /**
     * Set weight
     *
     * @param string $weight
     *
     * @return OcProductOptionValue
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set weightPrefix
     *
     * @param string $weightPrefix
     *
     * @return OcProductOptionValue
     */
    public function setWeightPrefix($weightPrefix)
    {
        $this->weightPrefix = $weightPrefix;

        return $this;
    }

    /**
     * Get weightPrefix
     *
     * @return string
     */
    public function getWeightPrefix()
    {
        return $this->weightPrefix;
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
}

