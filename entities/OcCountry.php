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
        $this->$name;
        $this->$isoCode2;
        $this->$isoCode3;
        $this->$addressFormat;
        $this->$postcodeRequired;
        $this->$status;
    }


}
