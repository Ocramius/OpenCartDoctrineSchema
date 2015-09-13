<?php


/**
 * OcOrderRecurringTransaction
 */
class OcOrderRecurringTransaction
{

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $type;

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
    private $orderRecurringTransactionId;

    /**
     * @var \OcOrderRecurring
     */
    private $orderRecurring;

    public function __construct(OcOrderRecurring $orderRecurring, $reference, $type, $amount, DateTime $dateAdded)
    {
        $this->orderRecurring = $orderRecurring;
        $this->reference = $reference;
        $this->type = $type;
        $this->amount = $amount;
        $this->dateAdded = $dateAdded;
    }


}
