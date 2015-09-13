<?php



/**
 * OcCategoryToLayout
 */
class OcCategoryToLayout
{
    /**
     * @var integer
     */
    private $layoutId;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $storeId;


    /**
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return OcCategoryToLayout
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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcCategoryToLayout
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
     * @return OcCategoryToLayout
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

