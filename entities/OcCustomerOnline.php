<?php


/**
 * OcCustomerOnline
 */
class OcCustomerOnline
{

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $referer;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \OcCustomer
     */
    private $customer;

    public function __construct(OcCustomer $customer, $url, $referer, DateTime $dateAdded)
    {
        $this->$customer;
        $this->$url;
        $this->$referer;
        $this->$dateAdded;
    }


}
