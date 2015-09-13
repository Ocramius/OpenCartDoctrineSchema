<?php



/**
 * OcFilter
 */
class OcFilter
{
    /**
     * @var integer
     */
    private $filterGroupId;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $filterId;


    /**
     * Set filterGroupId
     *
     * @param integer $filterGroupId
     *
     * @return OcFilter
     */
    public function setFilterGroupId($filterGroupId)
    {
        $this->filterGroupId = $filterGroupId;

        return $this;
    }

    /**
     * Get filterGroupId
     *
     * @return integer
     */
    public function getFilterGroupId()
    {
        return $this->filterGroupId;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcFilter
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
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

