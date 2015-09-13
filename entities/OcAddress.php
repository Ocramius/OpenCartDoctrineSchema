<?php


/**
 * OcAddress
 */
class OcAddress
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
    private $company;

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
    private $customField;

    /**
     * @var integer
     */
    private $addressId;

    /**
     * @var \OcCountry
     */
    private $country;

    /**
     * @var \OcZone
     */
    private $zone;

    /**
     * @var \OcCustomer
     */
    private $customer;

    public function __construct(OcCountry $country, OcZone $zone, OcCustomer $customer, $firstname, $lastname, $company, $address1, $address2, $city, $postcode, $customField)
    {
        $this->$country;
        $this->$zone;
        $this->$customer;
        $this->$firstname;
        $this->$lastname;
        $this->$company;
        $this->$address1;
        $this->$address2;
        $this->$city;
        $this->$postcode;
        $this->$customField;
    }


}
