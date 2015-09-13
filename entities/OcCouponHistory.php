<?php



/**
 * OcCouponHistory
 */
class OcCouponHistory
{
    /**
     * @var integer
     */
    private $couponId;

    /**
     * @var integer
     */
    private $orderId;

    /**
     * @var integer
     */
    private $customerId;

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
    private $couponHistoryId;


    /**
     * Set couponId
     *
     * @param integer $couponId
     *
     * @return OcCouponHistory
     */
    public function setCouponId($couponId)
    {
        $this->couponId = $couponId;

        return $this;
    }

    /**
     * Get couponId
     *
     * @return integer
     */
    public function getCouponId()
    {
        return $this->couponId;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return OcCouponHistory
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
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return OcCouponHistory
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set amount
     *
     * @param string $amount
     *
     * @return OcCouponHistory
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
     * @return OcCouponHistory
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
     * Get couponHistoryId
     *
     * @return integer
     */
    public function getCouponHistoryId()
    {
        return $this->couponHistoryId;
    }
}

