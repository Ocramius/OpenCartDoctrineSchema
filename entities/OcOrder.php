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


}

