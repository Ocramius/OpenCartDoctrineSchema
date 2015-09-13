<?php



/**
 * OcCategoryToStore
 */
class OcCategoryToStore
{
    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $storeId;


    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcCategoryToStore
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

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcCategoryToStore
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

