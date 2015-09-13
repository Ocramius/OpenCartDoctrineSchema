<?php



/**
 * OcRecurring
 */
class OcRecurring
{
    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $frequency;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var integer
     */
    private $cycle;

    /**
     * @var boolean
     */
    private $trialStatus;

    /**
     * @var string
     */
    private $trialPrice;

    /**
     * @var string
     */
    private $trialFrequency;

    /**
     * @var integer
     */
    private $trialDuration;

    /**
     * @var integer
     */
    private $trialCycle;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $recurringId;


    /**
     * Set price
     *
     * @param string $price
     *
     * @return OcRecurring
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set frequency
     *
     * @param string $frequency
     *
     * @return OcRecurring
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return OcRecurring
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set cycle
     *
     * @param integer $cycle
     *
     * @return OcRecurring
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return integer
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set trialStatus
     *
     * @param boolean $trialStatus
     *
     * @return OcRecurring
     */
    public function setTrialStatus($trialStatus)
    {
        $this->trialStatus = $trialStatus;

        return $this;
    }

    /**
     * Get trialStatus
     *
     * @return boolean
     */
    public function getTrialStatus()
    {
        return $this->trialStatus;
    }

    /**
     * Set trialPrice
     *
     * @param string $trialPrice
     *
     * @return OcRecurring
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
     * Set trialFrequency
     *
     * @param string $trialFrequency
     *
     * @return OcRecurring
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
     * Set trialDuration
     *
     * @param integer $trialDuration
     *
     * @return OcRecurring
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
     * Set trialCycle
     *
     * @param integer $trialCycle
     *
     * @return OcRecurring
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
     * Set status
     *
     * @param boolean $status
     *
     * @return OcRecurring
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
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcRecurring
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
     * Get recurringId
     *
     * @return integer
     */
    public function getRecurringId()
    {
        return $this->recurringId;
    }
}

