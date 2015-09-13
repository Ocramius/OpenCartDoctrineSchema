<?php



/**
 * OcCouponCategory
 */
class OcCouponCategory
{
    /**
     * @var integer
     */
    private $couponId;

    /**
     * @var integer
     */
    private $categoryId;


    /**
     * Set couponId
     *
     * @param integer $couponId
     *
     * @return OcCouponCategory
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
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcCouponCategory
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}

