<?php



/**
 * OcProductRelated
 */
class OcProductRelated
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $relatedId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductRelated
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
     * Set relatedId
     *
     * @param integer $relatedId
     *
     * @return OcProductRelated
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;

        return $this;
    }

    /**
     * Get relatedId
     *
     * @return integer
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }
}

