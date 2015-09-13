<?php


/**
 * OcOrderRecurring
 */
class OcOrderRecurring
{

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var integer
     */
    private $productQuantity;

    /**
     * @var string
     */
    private $recurringName;

    /**
     * @var string
     */
    private $recurringDescription;

    /**
     * @var string
     */
    private $recurringFrequency;

    /**
     * @var integer
     */
    private $recurringCycle;

    /**
     * @var integer
     */
    private $recurringDuration;

    /**
     * @var string
     */
    private $recurringPrice;

    /**
     * @var boolean
     */
    private $trial;

    /**
     * @var string
     */
    private $trialFrequency;

    /**
     * @var integer
     */
    private $trialCycle;

    /**
     * @var integer
     */
    private $trialDuration;

    /**
     * @var string
     */
    private $trialPrice;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $orderRecurringId;

    /**
     * @var \OcRecurring
     */
    private $recurring;

    /**
     * @var \OcOrder
     */
    private $order;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcRecurring $recurring, OcOrder $order, OcProduct $product, $reference, $productName, $productQuantity, $recurringName, $recurringDescription, $recurringFrequency, $recurringCycle, $recurringDuration, $recurringPrice, $trial, $trialFrequency, $trialCycle, $trialDuration, $trialPrice, $status, DateTime $dateAdded)
    {
        $this->recurring = $recurring;
        $this->order = $order;
        $this->product = $product;
        $this->reference = $reference;
        $this->productName = $productName;
        $this->productQuantity = $productQuantity;
        $this->recurringName = $recurringName;
        $this->recurringDescription = $recurringDescription;
        $this->recurringFrequency = $recurringFrequency;
        $this->recurringCycle = $recurringCycle;
        $this->recurringDuration = $recurringDuration;
        $this->recurringPrice = $recurringPrice;
        $this->trial = $trial;
        $this->trialFrequency = $trialFrequency;
        $this->trialCycle = $trialCycle;
        $this->trialDuration = $trialDuration;
        $this->trialPrice = $trialPrice;
        $this->status = $status;
        $this->dateAdded = $dateAdded;
    }


}
