<?php


/**
 * OcCustomerTransaction
 */
class OcCustomerTransaction
{

    /**
     * @var string
     */
    private $description;

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
    private $customerTransactionId;

    /**
     * @var \OcCustomer
     */
    private $customer;

    /**
     * @var \OcOrder
     */
    private $order;

    public function __construct(OcCustomer $customer, OcOrder $order, $description, $amount, DateTime $dateAdded)
    {
        $this->$customer;
        $this->$order;
        $this->$description;
        $this->$amount;
        $this->$dateAdded;
    }


}
