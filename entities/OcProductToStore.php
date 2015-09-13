<?php



/**
 * OcProductToStore
 */
class OcProductToStore
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $storeId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductToStore
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
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcProductToStore
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return integer
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
}

