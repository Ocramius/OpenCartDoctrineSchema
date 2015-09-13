<?php


/**
 * OcReturn
 */
class OcReturn
{

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $product;

    /**
     * @var string
     */
    private $model;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var boolean
     */
    private $opened;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $dateOrdered = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $returnId;

    /**
     * @var \OcReturnStatus
     */
    private $returnStatus;

    /**
     * @var \OcReturnReason
     */
    private $returnReason;

    /**
     * @var \OcCustomer
     */
    private $customer;

    /**
     * @var \OcOrder
     */
    private $order;

    /**
     * @var \OcReturnAction
     */
    private $returnAction;

    /**
     * @var \OcProduct
     */
    private $product2;

    public function __construct(OcReturnStatus $returnStatus, OcReturnReason $returnReason, OcCustomer $customer, OcOrder $order, OcReturnAction $returnAction, OcProduct $product2, $firstname, $lastname, $email, $telephone, $product, $model, $quantity, $opened, $dateOrdered, DateTime $dateAdded, DateTime $dateModified, $comment = null)
    {
        $this->returnStatus = $returnStatus;
        $this->returnReason = $returnReason;
        $this->customer = $customer;
        $this->order = $order;
        $this->returnAction = $returnAction;
        $this->product2 = $product2;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->product = $product;
        $this->model = $model;
        $this->quantity = $quantity;
        $this->opened = $opened;
        $this->dateOrdered = $dateOrdered;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
        $this->comment = $comment;
    }


}
