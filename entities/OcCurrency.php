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
        $this->title = $title;
        $this->code = $code;
        $this->symbolLeft = $symbolLeft;
        $this->symbolRight = $symbolRight;
        $this->decimalPlace = $decimalPlace;
        $this->value = $value;
        $this->status = $status;
        $this->dateModified = $dateModified;
    }


}
