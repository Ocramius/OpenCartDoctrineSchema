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


}

