<?php



/**
 * OcTaxRateToCustomerGroup
 */
class OcTaxRateToCustomerGroup
{
    /**
     * @var integer
     */
    private $taxRateId;

    /**
     * @var integer
     */
    private $customerGroupId;


    /**
     * Set taxRateId
     *
     * @param integer $taxRateId
     *
     * @return OcTaxRateToCustomerGroup
     */
    public function setTaxRateId($taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }

    /**
     * Get taxRateId
     *
     * @return integer
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return OcTaxRateToCustomerGroup
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

