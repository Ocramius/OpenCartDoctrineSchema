<?php



/**
 * OcProductFilter
 */
class OcProductFilter
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $filterId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductFilter
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
     * Set filterId
     *
     * @param integer $filterId
     *
     * @return OcProductFilter
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;

        return $this;
    }

    /**
     * Get filterId
     *
     * @return integer
     */
    public function getFilterId()
    {
        return $this->filterId;
    }
}

