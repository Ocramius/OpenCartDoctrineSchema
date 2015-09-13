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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    public function __construct(Doctrine\Common\Collections\Collection $language, $price, $frequency, $duration, $cycle, $trialStatus, $trialPrice, $trialFrequency, $trialDuration, $trialCycle, $status, $sortOrder)
    {
        $this->language = $language;
        $this->price = $price;
        $this->frequency = $frequency;
        $this->duration = $duration;
        $this->cycle = $cycle;
        $this->trialStatus = $trialStatus;
        $this->trialPrice = $trialPrice;
        $this->trialFrequency = $trialFrequency;
        $this->trialDuration = $trialDuration;
        $this->trialCycle = $trialCycle;
        $this->status = $status;
        $this->sortOrder = $sortOrder;
    }


}
