<?php



/**
 * OcVoucherHistory
 */
class OcVoucherHistory
{
    /**
     * @var integer
     */
    private $voucherId;

    /**
     * @var integer
     */
    private $orderId;

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
    private $voucherHistoryId;


    /**
     * Set voucherId
     *
     * @param integer $voucherId
     *
     * @return OcVoucherHistory
     */
    public function setVoucherId($voucherId)
    {
        $this->voucherId = $voucherId;

        return $this;
    }

    /**
     * Get voucherId
     *
     * @return integer
     */
    public function getVoucherId()
    {
        return $this->voucherId;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OcVoucherHistory
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
     * Set amount
     *
     * @param string $amount
     *
     * @return OcVoucherHistory
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
     * @return OcVoucherHistory
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
     * Get voucherHistoryId
     *
     * @return integer
     */
    public function getVoucherHistoryId()
    {
        return $this->voucherHistoryId;
    }
}

