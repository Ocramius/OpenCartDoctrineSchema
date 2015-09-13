<?php


/**
 * OcCustomerReward
 */
class OcCustomerReward
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $points = '0';

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $customerRewardId;

    /**
     * @var \OcCustomer
     */
    private $customer;

    /**
     * @var \OcOrder
     */
    private $order;

    public function __construct(OcCustomer $customer, OcOrder $order, $description, $points, DateTime $dateAdded)
    {
        $this->customer = $customer;
        $this->order = $order;
        $this->description = $description;
        $this->points = $points;
        $this->dateAdded = $dateAdded;
    }


}
