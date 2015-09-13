<?php



/**
 * OcOrderRecurring
 */
class OcOrderRecurring
{
    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var integer
     */
    private $productQuantity;

    /**
     * @var integer
     */
    private $recurringId;

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
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OcOrderRecurring
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return OcOrderRecurring
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcOrderRecurring
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
     * Set productName
     *
     * @param string $productName
     *
     * @return OcOrderRecurring
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set productQuantity
     *
     * @param integer $productQuantity
     *
     * @return OcOrderRecurring
     */
    public function setProductQuantity($productQuantity)
    {
        $this->productQuantity = $productQuantity;

        return $this;
    }

    /**
     * Get productQuantity
     *
     * @return integer
     */
    public function getProductQuantity()
    {
        return $this->productQuantity;
    }

    /**
     * Set recurringId
     *
     * @param integer $recurringId
     *
     * @return OcOrderRecurring
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
     * Set recurringName
     *
     * @param string $recurringName
     *
     * @return OcOrderRecurring
     */
    public function setRecurringName($recurringName)
    {
        $this->recurringName = $recurringName;

        return $this;
    }

    /**
     * Get recurringName
     *
     * @return string
     */
    public function getRecurringName()
    {
        return $this->recurringName;
    }

    /**
     * Set recurringDescription
     *
     * @param string $recurringDescription
     *
     * @return OcOrderRecurring
     */
    public function setRecurringDescription($recurringDescription)
    {
        $this->recurringDescription = $recurringDescription;

        return $this;
    }

    /**
     * Get recurringDescription
     *
     * @return string
     */
    public function getRecurringDescription()
    {
        return $this->recurringDescription;
    }

    /**
     * Set recurringFrequency
     *
     * @param string $recurringFrequency
     *
     * @return OcOrderRecurring
     */
    public function setRecurringFrequency($recurringFrequency)
    {
        $this->recurringFrequency = $recurringFrequency;

        return $this;
    }

    /**
     * Get recurringFrequency
     *
     * @return string
     */
    public function getRecurringFrequency()
    {
        return $this->recurringFrequency;
    }

    /**
     * Set recurringCycle
     *
     * @param integer $recurringCycle
     *
     * @return OcOrderRecurring
     */
    public function setRecurringCycle($recurringCycle)
    {
        $this->recurringCycle = $recurringCycle;

        return $this;
    }

    /**
     * Get recurringCycle
     *
     * @return integer
     */
    public function getRecurringCycle()
    {
        return $this->recurringCycle;
    }

    /**
     * Set recurringDuration
     *
     * @param integer $recurringDuration
     *
     * @return OcOrderRecurring
     */
    public function setRecurringDuration($recurringDuration)
    {
        $this->recurringDuration = $recurringDuration;

        return $this;
    }

    /**
     * Get recurringDuration
     *
     * @return integer
     */
    public function getRecurringDuration()
    {
        return $this->recurringDuration;
    }

    /**
     * Set recurringPrice
     *
     * @param string $recurringPrice
     *
     * @return OcOrderRecurring
     */
    public function setRecurringPrice($recurringPrice)
    {
        $this->recurringPrice = $recurringPrice;

        return $this;
    }

    /**
     * Get recurringPrice
     *
     * @return string
     */
    public function getRecurringPrice()
    {
        return $this->recurringPrice;
    }

    /**
     * Set trial
     *
     * @param boolean $trial
     *
     * @return OcOrderRecurring
     */
    public function setTrial($trial)
    {
        $this->trial = $trial;

        return $this;
    }

    /**
     * Get trial
     *
     * @return boolean
     */
    public function getTrial()
    {
        return $this->trial;
    }

    /**
     * Set trialFrequency
     *
     * @param string $trialFrequency
     *
     * @return OcOrderRecurring
     */
    public function setTrialFrequency($trialFrequency)
    {
        $this->trialFrequency = $trialFrequency;

        return $this;
    }

    /**
     * Get trialFrequency
     *
     * @return string
     */
    public function getTrialFrequency()
    {
        return $this->trialFrequency;
    }

    /**
     * Set trialCycle
     *
     * @param integer $trialCycle
     *
     * @return OcOrderRecurring
     */
    public function setTrialCycle($trialCycle)
    {
        $this->trialCycle = $trialCycle;

        return $this;
    }

    /**
     * Get trialCycle
     *
     * @return integer
     */
    public function getTrialCycle()
    {
        return $this->trialCycle;
    }

    /**
     * Set trialDuration
     *
     * @param integer $trialDuration
     *
     * @return OcOrderRecurring
     */
    public function setTrialDuration($trialDuration)
    {
        $this->trialDuration = $trialDuration;

        return $this;
    }

    /**
     * Get trialDuration
     *
     * @return integer
     */
    public function getTrialDuration()
    {
        return $this->trialDuration;
    }

    /**
     * Set trialPrice
     *
     * @param string $trialPrice
     *
     * @return OcOrderRecurring
     */
    public function setTrialPrice($trialPrice)
    {
        $this->trialPrice = $trialPrice;

        return $this;
    }

    /**
     * Get trialPrice
     *
     * @return string
     */
    public function getTrialPrice()
    {
        return $this->trialPrice;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return OcOrderRecurring
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcOrderRecurring
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Get orderRecurringId
     *
     * @return integer
     */
    public function getOrderRecurringId()
    {
        return $this->orderRecurringId;
    }
}

