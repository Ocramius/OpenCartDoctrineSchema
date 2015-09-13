<?php



/**
 * OcProductReward
 */
class OcProductReward
{
    /**
     * @var integer
     */
    private $productId = '0';

    /**
     * @var integer
     */
    private $customerGroupId = '0';

    /**
     * @var integer
     */
    private $points = '0';

    /**
     * @var integer
     */
    private $productRewardId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductReward
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
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return OcProductReward
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId
     *
     * @return integer
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set points
     *
     * @param integer $points
     *
     * @return OcProductReward
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Get productRewardId
     *
     * @return integer
     */
    public function getProductRewardId()
    {
        return $this->productRewardId;
    }
}

