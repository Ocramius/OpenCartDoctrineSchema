<?php


/**
 * OcAffiliateActivity
 */
class OcAffiliateActivity
{

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $data;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $activityId;

    /**
     * @var \OcAffiliate
     */
    private $affiliate;

    public function __construct(OcAffiliate $affiliate, $key, $data, $ip, DateTime $dateAdded)
    {
        $this->affiliate = $affiliate;
        $this->key = $key;
        $this->data = $data;
        $this->ip = $ip;
        $this->dateAdded = $dateAdded;
    }


}
