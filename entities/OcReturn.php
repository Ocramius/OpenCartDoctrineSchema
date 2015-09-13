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


}

