<?php



/**
 * OcProductRecurring
 */
class OcProductRecurring
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $recurringId;

    /**
     * @var integer
     */
    private $customerGroupId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductRecurring
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
     * Set recurringId
     *
     * @param integer $recurringId
     *
     * @return OcProductRecurring
     */
    public function setRecurringId($recurringId)
    {
        $this->recurringId = $recurringId;

        return $this;
    }

    /**
     * Get recurringId
     *
     * @return integer
     */
    public function getRecurringId()
    {
        return $this->recurringId;
    }

    /**
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return OcProductRecurring
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
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

