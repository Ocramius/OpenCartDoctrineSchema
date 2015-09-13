<?php



/**
 * OcOrderRecurringTransaction
 */
class OcOrderRecurringTransaction
{
    /**
     * @var integer
     */
    private $orderRecurringId;

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
     * Set orderRecurringId
     *
     * @param integer $orderRecurringId
     *
     * @return OcOrderRecurringTransaction
     */
    public function setOrderRecurringId($orderRecurringId)
    {
        $this->orderRecurringId = $orderRecurringId;

        return $this;
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

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return OcOrderRecurringTransaction
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
     * Set type
     *
     * @param string $type
     *
     * @return OcOrderRecurringTransaction
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return OcOrderRecurringTransaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcOrderRecurringTransaction
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
     * Get orderRecurringTransactionId
     *
     * @return integer
     */
    public function getOrderRecurringTransactionId()
    {
        return $this->orderRecurringTransactionId;
    }
}

