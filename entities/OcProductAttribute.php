<?php



/**
 * OcProductAttribute
 */
class OcProductAttribute
{
    /**
     * @var string
     */
    private $text;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $attributeId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set text
     *
     * @param string $text
     *
     * @return OcProductAttribute
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductAttribute
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
     * Set attributeId
     *
     * @param integer $attributeId
     *
     * @return OcProductAttribute
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;

        return $this;
    }

    /**
     * Get attributeId
     *
     * @return integer
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcProductAttribute
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }
}

