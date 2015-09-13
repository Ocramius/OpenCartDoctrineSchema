<?php



/**
 * OcProductToCategory
 */
class OcProductToCategory
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $categoryId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductToCategory
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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcProductToCategory
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}

