<?php


/**
 * OcAffiliate
 */
class OcAffiliate
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
    private $company;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postcode;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $commission = '0.00';

    /**
     * @var string
     */
    private $tax;

    /**
     * @var string
     */
    private $payment;

    /**
     * @var string
     */
    private $cheque;

    /**
     * @var string
     */
    private $paypal;

    /**
     * @var string
     */
    private $bankName;

    /**
     * @var string
     */
    private $bankBranchNumber;

    /**
     * @var string
     */
    private $bankSwiftCode;

    /**
     * @var string
     */
    private $bankAccountName;

    /**
     * @var string
     */
    private $bankAccountNumber;

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
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $affiliateId;

    /**
     * @var \OcCountry
     */
    private $country;

    /**
     * @var \OcZone
     */
    private $zone;

    public function __construct(OcCountry $country, OcZone $zone, $firstname, $lastname, $email, $telephone, $fax, $password, $salt, $company, $website, $address1, $address2, $city, $postcode, $code, $commission, $tax, $payment, $cheque, $paypal, $bankName, $bankBranchNumber, $bankSwiftCode, $bankAccountName, $bankAccountNumber, $ip, $status, $approved, DateTime $dateAdded)
    {
        $this->country = $country;
        $this->zone = $zone;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->fax = $fax;
        $this->password = $password;
        $this->salt = $salt;
        $this->company = $company;
        $this->website = $website;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->postcode = $postcode;
        $this->code = $code;
        $this->commission = $commission;
        $this->tax = $tax;
        $this->payment = $payment;
        $this->cheque = $cheque;
        $this->paypal = $paypal;
        $this->bankName = $bankName;
        $this->bankBranchNumber = $bankBranchNumber;
        $this->bankSwiftCode = $bankSwiftCode;
        $this->bankAccountName = $bankAccountName;
        $this->bankAccountNumber = $bankAccountNumber;
        $this->ip = $ip;
        $this->status = $status;
        $this->approved = $approved;
        $this->dateAdded = $dateAdded;
    }


}
