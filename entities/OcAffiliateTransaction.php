<?php


/**
 * OcAffiliateTransaction
 */
class OcAffiliateTransaction
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $affiliateTransactionId;

    /**
     * @var \OcAffiliate
     */
    private $affiliate;

    /**
     * @var \OcOrder
     */
    private $order;

    public function __construct(OcAffiliate $affiliate, OcOrder $order, $description, $amount, DateTime $dateAdded)
    {
        $this->affiliate = $affiliate;
        $this->order = $order;
        $this->description = $description;
        $this->amount = $amount;
        $this->dateAdded = $dateAdded;
    }


}
