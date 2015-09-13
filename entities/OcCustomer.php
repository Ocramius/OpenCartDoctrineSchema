<?php


/**
 * OcCustomer
 */
class OcCustomer
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
    private $fax;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $cart;

    /**
     * @var string
     */
    private $wishlist;

    /**
     * @var boolean
     */
    private $newsletter = '0';

    /**
     * @var string
     */
    private $customField;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var boolean
     */
    private $approved;

    /**
     * @var boolean
     */
    private $safe;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $customerId;

    /**
     * @var \OcAddress
     */
    private $address;

    /**
     * @var \OcCustomerGroup
     */
    private $customerGroup;

    /**
     * @var \OcStore
     */
    private $store;

    public function __construct(OcAddress $address, OcCustomerGroup $customerGroup, OcStore $store, $firstname, $lastname, $email, $telephone, $fax, $password, $salt, $newsletter, $customField, $ip, $status, $approved, $safe, $token, DateTime $dateAdded, $cart = null, $wishlist = null)
    {
        $this->$address;
        $this->$customerGroup;
        $this->$store;
        $this->$firstname;
        $this->$lastname;
        $this->$email;
        $this->$telephone;
        $this->$fax;
        $this->$password;
        $this->$salt;
        $this->$newsletter;
        $this->$customField;
        $this->$ip;
        $this->$status;
        $this->$approved;
        $this->$safe;
        $this->$token;
        $this->$dateAdded;
        $this->$cart;
        $this->$wishlist;
    }


}
