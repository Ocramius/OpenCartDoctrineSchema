<?php



/**
 * OcCustomerGroup
 */
class OcCustomerGroup
{
    /**
     * @var integer
     */
    private $approval;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $customerGroupId;


    /**
     * Set approval
     *
     * @param integer $approval
     *
     * @return OcCustomerGroup
     */
    public function setApproval($approval)
    {
        $this->approval = $approval;

        return $this;
    }

    /**
     * Get approval
     *
     * @return integer
     */
    public function getApproval()
    {
        return $this->approval;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcCustomerGroup
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
     * Get customerGroupId
     *
     * @return integer
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }
}

