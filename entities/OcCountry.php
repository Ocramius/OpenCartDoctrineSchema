<?php



/**
 * OcCountry
 */
class OcCountry
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $isoCode2;

    /**
     * @var string
     */
    private $isoCode3;

    /**
     * @var string
     */
    private $addressFormat;

    /**
     * @var boolean
     */
    private $postcodeRequired;

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var integer
     */
    private $countryId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcCountry
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set isoCode2
     *
     * @param string $isoCode2
     *
     * @return OcCountry
     */
    public function setIsoCode2($isoCode2)
    {
        $this->isoCode2 = $isoCode2;

        return $this;
    }

    /**
     * Get isoCode2
     *
     * @return string
     */
    public function getIsoCode2()
    {
        return $this->isoCode2;
    }

    /**
     * Set isoCode3
     *
     * @param string $isoCode3
     *
     * @return OcCountry
     */
    public function setIsoCode3($isoCode3)
    {
        $this->isoCode3 = $isoCode3;

        return $this;
    }

    /**
     * Get isoCode3
     *
     * @return string
     */
    public function getIsoCode3()
    {
        return $this->isoCode3;
    }

    /**
     * Set addressFormat
     *
     * @param string $addressFormat
     *
     * @return OcCountry
     */
    public function setAddressFormat($addressFormat)
    {
        $this->addressFormat = $addressFormat;

        return $this;
    }

    /**
     * Get addressFormat
     *
     * @return string
     */
    public function getAddressFormat()
    {
        return $this->addressFormat;
    }

    /**
     * Set postcodeRequired
     *
     * @param boolean $postcodeRequired
     *
     * @return OcCountry
     */
    public function setPostcodeRequired($postcodeRequired)
    {
        $this->postcodeRequired = $postcodeRequired;

        return $this;
    }

    /**
     * Get postcodeRequired
     *
     * @return boolean
     */
    public function getPostcodeRequired()
    {
        return $this->postcodeRequired;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return OcCountry
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
}

