<?php



/**
 * OcFilterGroup
 */
class OcFilterGroup
{
    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $filterGroupId;


    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcFilterGroup
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
     * Get filterGroupId
     *
     * @return integer
     */
    public function getFilterGroupId()
    {
        return $this->filterGroupId;
    }
}

