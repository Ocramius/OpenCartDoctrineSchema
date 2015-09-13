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
        $this->$recurring;
        $this->$order;
        $this->$product;
        $this->$reference;
        $this->$productName;
        $this->$productQuantity;
        $this->$recurringName;
        $this->$recurringDescription;
        $this->$recurringFrequency;
        $this->$recurringCycle;
        $this->$recurringDuration;
        $this->$recurringPrice;
        $this->$trial;
        $this->$trialFrequency;
        $this->$trialCycle;
        $this->$trialDuration;
        $this->$trialPrice;
        $this->$status;
        $this->$dateAdded;
    }


}
