<?php


/**
 * OcCustomerIp
 */
class OcCustomerIp
{

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
    private $customerIpId;

    /**
     * @var \OcCustomer
     */
    private $customer;

    public function __construct(OcCustomer $customer, $ip, DateTime $dateAdded)
    {
        $this->customer = $customer;
        $this->ip = $ip;
        $this->dateAdded = $dateAdded;
    }


}
