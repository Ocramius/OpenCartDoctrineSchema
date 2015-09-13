<?php


/**
 * OcOrder
 */
class OcOrder
{

    /**
     * @var integer
     */
    private $invoiceNo = '0';

    /**
     * @var string
     */
    private $invoicePrefix;

    /**
     * @var string
     */
    private $storeName;

    /**
     * @var string
     */
    private $storeUrl;

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
    private $customField;

    /**
     * @var string
     */
    private $paymentFirstname;

    /**
     * @var string
     */
    private $paymentLastname;

    /**
     * @var string
     */
    private $paymentCompany;

    /**
     * @var string
     */
    private $paymentAddress1;

    /**
     * @var string
     */
    private $paymentAddress2;

    /**
     * @var string
     */
    private $paymentCity;

    /**
     * @var string
     */
    private $paymentPostcode;

    /**
     * @var string
     */
    private $paymentCountry;

    /**
     * @var integer
     */
    private $paymentCountryId;

    /**
     * @var string
     */
    private $paymentZone;

    /**
     * @var integer
     */
    private $paymentZoneId;

    /**
     * @var string
     */
    private $paymentAddressFormat;

    /**
     * @var string
     */
    private $paymentCustomField;

    /**
     * @var string
     */
    private $paymentMethod;

    /**
     * @var string
     */
    private $paymentCode;

    /**
     * @var string
     */
    private $shippingFirstname;

    /**
     * @var string
     */
    private $shippingLastname;

    /**
     * @var string
     */
    private $shippingCompany;

    /**
     * @var string
     */
    private $shippingAddress1;

    /**
     * @var string
     */
    private $shippingAddress2;

    /**
     * @var string
     */
    private $shippingCity;

    /**
     * @var string
     */
    private $shippingPostcode;

    /**
     * @var string
     */
    private $shippingCountry;

    /**
     * @var integer
     */
    private $shippingCountryId;

    /**
     * @var string
     */
    private $shippingZone;

    /**
     * @var integer
     */
    private $shippingZoneId;

    /**
     * @var string
     */
    private $shippingAddressFormat;

    /**
     * @var string
     */
    private $shippingCustomField;

    /**
     * @var string
     */
    private $shippingMethod;

    /**
     * @var string
     */
    private $shippingCode;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $total = '0.0000';

    /**
     * @var string
     */
    private $commission;

    /**
     * @var string
     */
    private $tracking;

    /**
     * @var string
     */
    private $currencyCode;

    /**
     * @var string
     */
    private $currencyValue = '1.00000000';

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $forwardedIp;

    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var string
     */
    private $acceptLanguage;

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
    private $orderId;

    /**
     * @var \OcMarketing
     */
    private $marketing;

    /**
     * @var \OcCustomerGroup
     */
    private $customerGroup;

    /**
     * @var \OcOrderStatus
     */
    private $orderStatus;

    /**
     * @var \OcStore
     */
    private $store;

    /**
     * @var \OcAffiliate
     */
    private $affiliate;

    /**
     * @var \OcLanguage
     */
    private $language;

    /**
     * @var \OcCustomer
     */
    private $customer;

    /**
     * @var \OcCurrency
     */
    private $currency;

    public function __construct(OcMarketing $marketing, OcCustomerGroup $customerGroup, OcOrderStatus $orderStatus, OcStore $store, OcAffiliate $affiliate, OcLanguage $language, OcCustomer $customer, OcCurrency $currency, $invoiceNo, $invoicePrefix, $storeName, $storeUrl, $firstname, $lastname, $email, $telephone, $fax, $customField, $paymentFirstname, $paymentLastname, $paymentCompany, $paymentAddress1, $paymentAddress2, $paymentCity, $paymentPostcode, $paymentCountry, $paymentCountryId, $paymentZone, $paymentZoneId, $paymentAddressFormat, $paymentCustomField, $paymentMethod, $paymentCode, $shippingFirstname, $shippingLastname, $shippingCompany, $shippingAddress1, $shippingAddress2, $shippingCity, $shippingPostcode, $shippingCountry, $shippingCountryId, $shippingZone, $shippingZoneId, $shippingAddressFormat, $shippingCustomField, $shippingMethod, $shippingCode, $comment, $total, $commission, $tracking, $currencyCode, $currencyValue, $ip, $forwardedIp, $userAgent, $acceptLanguage, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->marketing = $marketing;
        $this->customerGroup = $customerGroup;
        $this->orderStatus = $orderStatus;
        $this->store = $store;
        $this->affiliate = $affiliate;
        $this->language = $language;
        $this->customer = $customer;
        $this->currency = $currency;
        $this->invoiceNo = $invoiceNo;
        $this->invoicePrefix = $invoicePrefix;
        $this->storeName = $storeName;
        $this->storeUrl = $storeUrl;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->fax = $fax;
        $this->customField = $customField;
        $this->paymentFirstname = $paymentFirstname;
        $this->paymentLastname = $paymentLastname;
        $this->paymentCompany = $paymentCompany;
        $this->paymentAddress1 = $paymentAddress1;
        $this->paymentAddress2 = $paymentAddress2;
        $this->paymentCity = $paymentCity;
        $this->paymentPostcode = $paymentPostcode;
        $this->paymentCountry = $paymentCountry;
        $this->paymentCountryId = $paymentCountryId;
        $this->paymentZone = $paymentZone;
        $this->paymentZoneId = $paymentZoneId;
        $this->paymentAddressFormat = $paymentAddressFormat;
        $this->paymentCustomField = $paymentCustomField;
        $this->paymentMethod = $paymentMethod;
        $this->paymentCode = $paymentCode;
        $this->shippingFirstname = $shippingFirstname;
        $this->shippingLastname = $shippingLastname;
        $this->shippingCompany = $shippingCompany;
        $this->shippingAddress1 = $shippingAddress1;
        $this->shippingAddress2 = $shippingAddress2;
        $this->shippingCity = $shippingCity;
        $this->shippingPostcode = $shippingPostcode;
        $this->shippingCountry = $shippingCountry;
        $this->shippingCountryId = $shippingCountryId;
        $this->shippingZone = $shippingZone;
        $this->shippingZoneId = $shippingZoneId;
        $this->shippingAddressFormat = $shippingAddressFormat;
        $this->shippingCustomField = $shippingCustomField;
        $this->shippingMethod = $shippingMethod;
        $this->shippingCode = $shippingCode;
        $this->comment = $comment;
        $this->total = $total;
        $this->commission = $commission;
        $this->tracking = $tracking;
        $this->currencyCode = $currencyCode;
        $this->currencyValue = $currencyValue;
        $this->ip = $ip;
        $this->forwardedIp = $forwardedIp;
        $this->userAgent = $userAgent;
        $this->acceptLanguage = $acceptLanguage;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
    }


}
