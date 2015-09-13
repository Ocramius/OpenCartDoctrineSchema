<?php


/**
 * OcCouponHistory
 */
class OcCouponHistory
{

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
     * @var \OcCustomer
     */
    private $customer;

    /**
     * @var \OcOrder
     */
    private $order;

    /**
     * @var \OcCoupon
     */
    private $coupon;

    public function __construct(OcCustomer $customer, OcOrder $order, OcCoupon $coupon, $amount, DateTime $dateAdded)
    {
        $this->$customer;
        $this->$order;
        $this->$coupon;
        $this->$amount;
        $this->$dateAdded;
    }


}
