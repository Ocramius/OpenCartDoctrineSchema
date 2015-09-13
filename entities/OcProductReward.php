<?php


/**
 * OcProductReward
 */
class OcProductReward
{

    /**
     * @var integer
     */
    private $points = '0';

    /**
     * @var integer
     */
    private $productRewardId;

    /**
     * @var \OcCustomerGroup
     */
    private $customerGroup;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcCustomerGroup $customerGroup, OcProduct $product, $points)
    {
        $this->customerGroup = $customerGroup;
        $this->product = $product;
        $this->points = $points;
    }


}
