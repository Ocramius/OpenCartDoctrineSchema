<?php



/**
 * OcProductToLayout
 */
class OcProductToLayout
{
    /**
     * @var integer
     */
    private $layoutId;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $storeId;


    /**
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return OcProductToLayout
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    /**
     * Get layoutId
     *
     * @return integer
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductToLayout
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
     * @return OcProductToLayout
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

