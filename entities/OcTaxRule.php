<?php


/**
 * OcTaxRule
 */
class OcTaxRule
{

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
     * @var \OcTaxRate
     */
    private $taxRate;

    /**
     * @var \OcTaxClass
     */
    private $taxClass;

    public function __construct(OcTaxRate $taxRate, OcTaxClass $taxClass, $based, $priority)
    {
        $this->$taxRate;
        $this->$taxClass;
        $this->$based;
        $this->$priority;
    }


}
