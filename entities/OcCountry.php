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

    public function __construct($name, $isoCode2, $isoCode3, $addressFormat, $postcodeRequired, $status)
    {
        $this->name = $name;
        $this->isoCode2 = $isoCode2;
        $this->isoCode3 = $isoCode3;
        $this->addressFormat = $addressFormat;
        $this->postcodeRequired = $postcodeRequired;
        $this->status = $status;
    }


}
