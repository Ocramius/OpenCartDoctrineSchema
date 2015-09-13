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
        $this->address = $address;
        $this->customerGroup = $customerGroup;
        $this->store = $store;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->fax = $fax;
        $this->password = $password;
        $this->salt = $salt;
        $this->newsletter = $newsletter;
        $this->customField = $customField;
        $this->ip = $ip;
        $this->status = $status;
        $this->approved = $approved;
        $this->safe = $safe;
        $this->token = $token;
        $this->dateAdded = $dateAdded;
        $this->cart = $cart;
        $this->wishlist = $wishlist;
    }


}
