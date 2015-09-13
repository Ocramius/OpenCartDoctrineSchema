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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

