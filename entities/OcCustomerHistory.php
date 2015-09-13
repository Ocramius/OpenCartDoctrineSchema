<?php


/**
 * OcCustomerHistory
 */
class OcCustomerHistory
{

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $customerHistoryId;

    /**
     * @var \OcCustomer
     */
    private $customer;

    public function __construct(OcCustomer $customer, $comment, DateTime $dateAdded)
    {
        $this->customer = $customer;
        $this->comment = $comment;
        $this->dateAdded = $dateAdded;
    }


}
