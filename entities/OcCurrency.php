<?php


/**
 * OcCurrency
 */
class OcCurrency
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $symbolLeft;

    /**
     * @var string
     */
    private $symbolRight;

    /**
     * @var string
     */
    private $decimalPlace;

    /**
     * @var float
     */
    private $value;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $currencyId;

    public function __construct($title, $code, $symbolLeft, $symbolRight, $decimalPlace, $value, $status, DateTime $dateModified)
    {
        $this->$title;
        $this->$code;
        $this->$symbolLeft;
        $this->$symbolRight;
        $this->$decimalPlace;
        $this->$value;
        $this->$status;
        $this->$dateModified;
    }


}
