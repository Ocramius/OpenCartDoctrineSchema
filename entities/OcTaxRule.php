<?php



/**
 * OcTaxRule
 */
class OcTaxRule
{
    /**
     * @var integer
     */
    private $taxClassId;

    /**
     * @var integer
     */
    private $taxRateId;

    /**
     * @var string
     */
    private $based;

    /**
     * @var integer
     */
    private $priority = '1';

    /**
     * @var integer
     */
    private $taxRuleId;


    /**
     * Set taxClassId
     *
     * @param integer $taxClassId
     *
     * @return OcTaxRule
     */
    public function setTaxClassId($taxClassId)
    {
        $this->taxClassId = $taxClassId;

        return $this;
    }

    /**
     * Get taxClassId
     *
     * @return integer
     */
    public function getTaxClassId()
    {
        return $this->taxClassId;
    }

    /**
     * Set taxRateId
     *
     * @param integer $taxRateId
     *
     * @return OcTaxRule
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
     * Set based
     *
     * @param string $based
     *
     * @return OcTaxRule
     */
    public function setBased($based)
    {
        $this->based = $based;

        return $this;
    }

    /**
     * Get based
     *
     * @return string
     */
    public function getBased()
    {
        return $this->based;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return OcTaxRule
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Get taxRuleId
     *
     * @return integer
     */
    public function getTaxRuleId()
    {
        return $this->taxRuleId;
    }
}

