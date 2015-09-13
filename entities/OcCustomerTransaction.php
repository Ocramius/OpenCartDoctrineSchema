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
        $this->customer = $customer;
        $this->order = $order;
        $this->description = $description;
        $this->amount = $amount;
        $this->dateAdded = $dateAdded;
    }


}
