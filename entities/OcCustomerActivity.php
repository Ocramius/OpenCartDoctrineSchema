<?php


/**
 * OcCustomerActivity
 */
class OcCustomerActivity
{

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $data;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $activityId;

    /**
     * @var \OcCustomer
     */
    private $customer;

    public function __construct(OcCustomer $customer, $key, $data, $ip, DateTime $dateAdded)
    {
        $this->$customer;
        $this->$key;
        $this->$data;
        $this->$ip;
        $this->$dateAdded;
    }


}
