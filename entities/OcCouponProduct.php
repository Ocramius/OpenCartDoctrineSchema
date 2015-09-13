<?php


/**
 * OcCouponProduct
 */
class OcCouponProduct
{

    /**
     * @var integer
     */
    private $couponProductId;

    /**
     * @var \OcCoupon
     */
    private $coupon;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcCoupon $coupon, OcProduct $product)
    {
        $this->$coupon;
        $this->$product;
    }


}
