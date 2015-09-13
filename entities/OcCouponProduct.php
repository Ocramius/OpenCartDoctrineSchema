<?php



/**
 * OcCouponProduct
 */
class OcCouponProduct
{
    /**
     * @var integer
     */
    private $couponId;

    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $couponProductId;


    /**
     * Set couponId
     *
     * @param integer $couponId
     *
     * @return OcCouponProduct
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
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcCouponProduct
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Get couponProductId
     *
     * @return integer
     */
    public function getCouponProductId()
    {
        return $this->couponProductId;
    }
}

