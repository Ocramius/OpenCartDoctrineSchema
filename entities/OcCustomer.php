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


}

