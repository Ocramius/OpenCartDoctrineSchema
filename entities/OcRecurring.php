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
        $this->$language;
        $this->$price;
        $this->$frequency;
        $this->$duration;
        $this->$cycle;
        $this->$trialStatus;
        $this->$trialPrice;
        $this->$trialFrequency;
        $this->$trialDuration;
        $this->$trialCycle;
        $this->$status;
        $this->$sortOrder;
    }


}
