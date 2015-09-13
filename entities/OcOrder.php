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
     * @var integer
     */
    private $storeId = '0';

    /**
     * @var string
     */
    private $storeName;

    /**
     * @var string
     */
    private $storeUrl;

    /**
     * @var integer
     */
    private $customerId = '0';

    /**
     * @var integer
     */
    private $customerGroupId = '0';

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
     * @var integer
     */
    private $orderStatusId = '0';

    /**
     * @var integer
     */
    private $affiliateId;

    /**
     * @var string
     */
    private $commission;

    /**
     * @var integer
     */
    private $marketingId;

    /**
     * @var string
     */
    private $tracking;

    /**
     * @var integer
     */
    private $languageId;

    /**
     * @var integer
     */
    private $currencyId;

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
     * Set invoiceNo
     *
     * @param integer $invoiceNo
     *
     * @return OcOrder
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo = $invoiceNo;

        return $this;
    }

    /**
     * Get invoiceNo
     *
     * @return integer
     */
    public function getInvoiceNo()
    {
        return $this->invoiceNo;
    }

    /**
     * Set invoicePrefix
     *
     * @param string $invoicePrefix
     *
     * @return OcOrder
     */
    public function setInvoicePrefix($invoicePrefix)
    {
        $this->invoicePrefix = $invoicePrefix;

        return $this;
    }

    /**
     * Get invoicePrefix
     *
     * @return string
     */
    public function getInvoicePrefix()
    {
        return $this->invoicePrefix;
    }

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcOrder
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return integer
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set storeName
     *
     * @param string $storeName
     *
     * @return OcOrder
     */
    public function setStoreName($storeName)
    {
        $this->storeName = $storeName;

        return $this;
    }

    /**
     * Get storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->storeName;
    }

    /**
     * Set storeUrl
     *
     * @param string $storeUrl
     *
     * @return OcOrder
     */
    public function setStoreUrl($storeUrl)
    {
        $this->storeUrl = $storeUrl;

        return $this;
    }

    /**
     * Get storeUrl
     *
     * @return string
     */
    public function getStoreUrl()
    {
        return $this->storeUrl;
    }

    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return OcOrder
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return OcOrder
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId
     *
     * @return integer
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return OcOrder
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return OcOrder
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return OcOrder
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return OcOrder
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return OcOrder
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set customField
     *
     * @param string $customField
     *
     * @return OcOrder
     */
    public function setCustomField($customField)
    {
        $this->customField = $customField;

        return $this;
    }

    /**
     * Get customField
     *
     * @return string
     */
    public function getCustomField()
    {
        return $this->customField;
    }

    /**
     * Set paymentFirstname
     *
     * @param string $paymentFirstname
     *
     * @return OcOrder
     */
    public function setPaymentFirstname($paymentFirstname)
    {
        $this->paymentFirstname = $paymentFirstname;

        return $this;
    }

    /**
     * Get paymentFirstname
     *
     * @return string
     */
    public function getPaymentFirstname()
    {
        return $this->paymentFirstname;
    }

    /**
     * Set paymentLastname
     *
     * @param string $paymentLastname
     *
     * @return OcOrder
     */
    public function setPaymentLastname($paymentLastname)
    {
        $this->paymentLastname = $paymentLastname;

        return $this;
    }

    /**
     * Get paymentLastname
     *
     * @return string
     */
    public function getPaymentLastname()
    {
        return $this->paymentLastname;
    }

    /**
     * Set paymentCompany
     *
     * @param string $paymentCompany
     *
     * @return OcOrder
     */
    public function setPaymentCompany($paymentCompany)
    {
        $this->paymentCompany = $paymentCompany;

        return $this;
    }

    /**
     * Get paymentCompany
     *
     * @return string
     */
    public function getPaymentCompany()
    {
        return $this->paymentCompany;
    }

    /**
     * Set paymentAddress1
     *
     * @param string $paymentAddress1
     *
     * @return OcOrder
     */
    public function setPaymentAddress1($paymentAddress1)
    {
        $this->paymentAddress1 = $paymentAddress1;

        return $this;
    }

    /**
     * Get paymentAddress1
     *
     * @return string
     */
    public function getPaymentAddress1()
    {
        return $this->paymentAddress1;
    }

    /**
     * Set paymentAddress2
     *
     * @param string $paymentAddress2
     *
     * @return OcOrder
     */
    public function setPaymentAddress2($paymentAddress2)
    {
        $this->paymentAddress2 = $paymentAddress2;

        return $this;
    }

    /**
     * Get paymentAddress2
     *
     * @return string
     */
    public function getPaymentAddress2()
    {
        return $this->paymentAddress2;
    }

    /**
     * Set paymentCity
     *
     * @param string $paymentCity
     *
     * @return OcOrder
     */
    public function setPaymentCity($paymentCity)
    {
        $this->paymentCity = $paymentCity;

        return $this;
    }

    /**
     * Get paymentCity
     *
     * @return string
     */
    public function getPaymentCity()
    {
        return $this->paymentCity;
    }

    /**
     * Set paymentPostcode
     *
     * @param string $paymentPostcode
     *
     * @return OcOrder
     */
    public function setPaymentPostcode($paymentPostcode)
    {
        $this->paymentPostcode = $paymentPostcode;

        return $this;
    }

    /**
     * Get paymentPostcode
     *
     * @return string
     */
    public function getPaymentPostcode()
    {
        return $this->paymentPostcode;
    }

    /**
     * Set paymentCountry
     *
     * @param string $paymentCountry
     *
     * @return OcOrder
     */
    public function setPaymentCountry($paymentCountry)
    {
        $this->paymentCountry = $paymentCountry;

        return $this;
    }

    /**
     * Get paymentCountry
     *
     * @return string
     */
    public function getPaymentCountry()
    {
        return $this->paymentCountry;
    }

    /**
     * Set paymentCountryId
     *
     * @param integer $paymentCountryId
     *
     * @return OcOrder
     */
    public function setPaymentCountryId($paymentCountryId)
    {
        $this->paymentCountryId = $paymentCountryId;

        return $this;
    }

    /**
     * Get paymentCountryId
     *
     * @return integer
     */
    public function getPaymentCountryId()
    {
        return $this->paymentCountryId;
    }

    /**
     * Set paymentZone
     *
     * @param string $paymentZone
     *
     * @return OcOrder
     */
    public function setPaymentZone($paymentZone)
    {
        $this->paymentZone = $paymentZone;

        return $this;
    }

    /**
     * Get paymentZone
     *
     * @return string
     */
    public function getPaymentZone()
    {
        return $this->paymentZone;
    }

    /**
     * Set paymentZoneId
     *
     * @param integer $paymentZoneId
     *
     * @return OcOrder
     */
    public function setPaymentZoneId($paymentZoneId)
    {
        $this->paymentZoneId = $paymentZoneId;

        return $this;
    }

    /**
     * Get paymentZoneId
     *
     * @return integer
     */
    public function getPaymentZoneId()
    {
        return $this->paymentZoneId;
    }

    /**
     * Set paymentAddressFormat
     *
     * @param string $paymentAddressFormat
     *
     * @return OcOrder
     */
    public function setPaymentAddressFormat($paymentAddressFormat)
    {
        $this->paymentAddressFormat = $paymentAddressFormat;

        return $this;
    }

    /**
     * Get paymentAddressFormat
     *
     * @return string
     */
    public function getPaymentAddressFormat()
    {
        return $this->paymentAddressFormat;
    }

    /**
     * Set paymentCustomField
     *
     * @param string $paymentCustomField
     *
     * @return OcOrder
     */
    public function setPaymentCustomField($paymentCustomField)
    {
        $this->paymentCustomField = $paymentCustomField;

        return $this;
    }

    /**
     * Get paymentCustomField
     *
     * @return string
     */
    public function getPaymentCustomField()
    {
        return $this->paymentCustomField;
    }

    /**
     * Set paymentMethod
     *
     * @param string $paymentMethod
     *
     * @return OcOrder
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set paymentCode
     *
     * @param string $paymentCode
     *
     * @return OcOrder
     */
    public function setPaymentCode($paymentCode)
    {
        $this->paymentCode = $paymentCode;

        return $this;
    }

    /**
     * Get paymentCode
     *
     * @return string
     */
    public function getPaymentCode()
    {
        return $this->paymentCode;
    }

    /**
     * Set shippingFirstname
     *
     * @param string $shippingFirstname
     *
     * @return OcOrder
     */
    public function setShippingFirstname($shippingFirstname)
    {
        $this->shippingFirstname = $shippingFirstname;

        return $this;
    }

    /**
     * Get shippingFirstname
     *
     * @return string
     */
    public function getShippingFirstname()
    {
        return $this->shippingFirstname;
    }

    /**
     * Set shippingLastname
     *
     * @param string $shippingLastname
     *
     * @return OcOrder
     */
    public function setShippingLastname($shippingLastname)
    {
        $this->shippingLastname = $shippingLastname;

        return $this;
    }

    /**
     * Get shippingLastname
     *
     * @return string
     */
    public function getShippingLastname()
    {
        return $this->shippingLastname;
    }

    /**
     * Set shippingCompany
     *
     * @param string $shippingCompany
     *
     * @return OcOrder
     */
    public function setShippingCompany($shippingCompany)
    {
        $this->shippingCompany = $shippingCompany;

        return $this;
    }

    /**
     * Get shippingCompany
     *
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->shippingCompany;
    }

    /**
     * Set shippingAddress1
     *
     * @param string $shippingAddress1
     *
     * @return OcOrder
     */
    public function setShippingAddress1($shippingAddress1)
    {
        $this->shippingAddress1 = $shippingAddress1;

        return $this;
    }

    /**
     * Get shippingAddress1
     *
     * @return string
     */
    public function getShippingAddress1()
    {
        return $this->shippingAddress1;
    }

    /**
     * Set shippingAddress2
     *
     * @param string $shippingAddress2
     *
     * @return OcOrder
     */
    public function setShippingAddress2($shippingAddress2)
    {
        $this->shippingAddress2 = $shippingAddress2;

        return $this;
    }

    /**
     * Get shippingAddress2
     *
     * @return string
     */
    public function getShippingAddress2()
    {
        return $this->shippingAddress2;
    }

    /**
     * Set shippingCity
     *
     * @param string $shippingCity
     *
     * @return OcOrder
     */
    public function setShippingCity($shippingCity)
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    /**
     * Get shippingCity
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Set shippingPostcode
     *
     * @param string $shippingPostcode
     *
     * @return OcOrder
     */
    public function setShippingPostcode($shippingPostcode)
    {
        $this->shippingPostcode = $shippingPostcode;

        return $this;
    }

    /**
     * Get shippingPostcode
     *
     * @return string
     */
    public function getShippingPostcode()
    {
        return $this->shippingPostcode;
    }

    /**
     * Set shippingCountry
     *
     * @param string $shippingCountry
     *
     * @return OcOrder
     */
    public function setShippingCountry($shippingCountry)
    {
        $this->shippingCountry = $shippingCountry;

        return $this;
    }

    /**
     * Get shippingCountry
     *
     * @return string
     */
    public function getShippingCountry()
    {
        return $this->shippingCountry;
    }

    /**
     * Set shippingCountryId
     *
     * @param integer $shippingCountryId
     *
     * @return OcOrder
     */
    public function setShippingCountryId($shippingCountryId)
    {
        $this->shippingCountryId = $shippingCountryId;

        return $this;
    }

    /**
     * Get shippingCountryId
     *
     * @return integer
     */
    public function getShippingCountryId()
    {
        return $this->shippingCountryId;
    }

    /**
     * Set shippingZone
     *
     * @param string $shippingZone
     *
     * @return OcOrder
     */
    public function setShippingZone($shippingZone)
    {
        $this->shippingZone = $shippingZone;

        return $this;
    }

    /**
     * Get shippingZone
     *
     * @return string
     */
    public function getShippingZone()
    {
        return $this->shippingZone;
    }

    /**
     * Set shippingZoneId
     *
     * @param integer $shippingZoneId
     *
     * @return OcOrder
     */
    public function setShippingZoneId($shippingZoneId)
    {
        $this->shippingZoneId = $shippingZoneId;

        return $this;
    }

    /**
     * Get shippingZoneId
     *
     * @return integer
     */
    public function getShippingZoneId()
    {
        return $this->shippingZoneId;
    }

    /**
     * Set shippingAddressFormat
     *
     * @param string $shippingAddressFormat
     *
     * @return OcOrder
     */
    public function setShippingAddressFormat($shippingAddressFormat)
    {
        $this->shippingAddressFormat = $shippingAddressFormat;

        return $this;
    }

    /**
     * Get shippingAddressFormat
     *
     * @return string
     */
    public function getShippingAddressFormat()
    {
        return $this->shippingAddressFormat;
    }

    /**
     * Set shippingCustomField
     *
     * @param string $shippingCustomField
     *
     * @return OcOrder
     */
    public function setShippingCustomField($shippingCustomField)
    {
        $this->shippingCustomField = $shippingCustomField;

        return $this;
    }

    /**
     * Get shippingCustomField
     *
     * @return string
     */
    public function getShippingCustomField()
    {
        return $this->shippingCustomField;
    }

    /**
     * Set shippingMethod
     *
     * @param string $shippingMethod
     *
     * @return OcOrder
     */
    public function setShippingMethod($shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * Get shippingMethod
     *
     * @return string
     */
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * Set shippingCode
     *
     * @param string $shippingCode
     *
     * @return OcOrder
     */
    public function setShippingCode($shippingCode)
    {
        $this->shippingCode = $shippingCode;

        return $this;
    }

    /**
     * Get shippingCode
     *
     * @return string
     */
    public function getShippingCode()
    {
        return $this->shippingCode;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return OcOrder
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return OcOrder
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set orderStatusId
     *
     * @param integer $orderStatusId
     *
     * @return OcOrder
     */
    public function setOrderStatusId($orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }

    /**
     * Get orderStatusId
     *
     * @return integer
     */
    public function getOrderStatusId()
    {
        return $this->orderStatusId;
    }

    /**
     * Set affiliateId
     *
     * @param integer $affiliateId
     *
     * @return OcOrder
     */
    public function setAffiliateId($affiliateId)
    {
        $this->affiliateId = $affiliateId;

        return $this;
    }

    /**
     * Get affiliateId
     *
     * @return integer
     */
    public function getAffiliateId()
    {
        return $this->affiliateId;
    }

    /**
     * Set commission
     *
     * @param string $commission
     *
     * @return OcOrder
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * Get commission
     *
     * @return string
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Set marketingId
     *
     * @param integer $marketingId
     *
     * @return OcOrder
     */
    public function setMarketingId($marketingId)
    {
        $this->marketingId = $marketingId;

        return $this;
    }

    /**
     * Get marketingId
     *
     * @return integer
     */
    public function getMarketingId()
    {
        return $this->marketingId;
    }

    /**
     * Set tracking
     *
     * @param string $tracking
     *
     * @return OcOrder
     */
    public function setTracking($tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }

    /**
     * Get tracking
     *
     * @return string
     */
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcOrder
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return OcOrder
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return integer
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     *
     * @return OcOrder
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set currencyValue
     *
     * @param string $currencyValue
     *
     * @return OcOrder
     */
    public function setCurrencyValue($currencyValue)
    {
        $this->currencyValue = $currencyValue;

        return $this;
    }

    /**
     * Get currencyValue
     *
     * @return string
     */
    public function getCurrencyValue()
    {
        return $this->currencyValue;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return OcOrder
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set forwardedIp
     *
     * @param string $forwardedIp
     *
     * @return OcOrder
     */
    public function setForwardedIp($forwardedIp)
    {
        $this->forwardedIp = $forwardedIp;

        return $this;
    }

    /**
     * Get forwardedIp
     *
     * @return string
     */
    public function getForwardedIp()
    {
        return $this->forwardedIp;
    }

    /**
     * Set userAgent
     *
     * @param string $userAgent
     *
     * @return OcOrder
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set acceptLanguage
     *
     * @param string $acceptLanguage
     *
     * @return OcOrder
     */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->acceptLanguage = $acceptLanguage;

        return $this;
    }

    /**
     * Get acceptLanguage
     *
     * @return string
     */
    public function getAcceptLanguage()
    {
        return $this->acceptLanguage;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcOrder
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return OcOrder
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
    }
}

