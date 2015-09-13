<?php



/**
 * OcCategoryFilter
 */
class OcCategoryFilter
{
    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $filterId;


    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcCategoryFilter
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
     * Set filterId
     *
     * @param integer $filterId
     *
     * @return OcCategoryFilter
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

