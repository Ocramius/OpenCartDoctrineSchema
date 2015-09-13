<?php



/**
 * OcProductOption
 */
class OcProductOption
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $optionId;

    /**
     * @var string
     */
    private $value;

    /**
     * @var boolean
     */
    private $required;

    /**
     * @var integer
     */
    private $productOptionId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductOption
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
     * @return OcProductOption
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
     * Set value
     *
     * @param string $value
     *
     * @return OcProductOption
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
     * Set required
     *
     * @param boolean $required
     *
     * @return OcProductOption
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
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
}

