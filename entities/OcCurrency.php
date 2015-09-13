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


    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcCurrency
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return OcCurrency
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set symbolLeft
     *
     * @param string $symbolLeft
     *
     * @return OcCurrency
     */
    public function setSymbolLeft($symbolLeft)
    {
        $this->symbolLeft = $symbolLeft;

        return $this;
    }

    /**
     * Get symbolLeft
     *
     * @return string
     */
    public function getSymbolLeft()
    {
        return $this->symbolLeft;
    }

    /**
     * Set symbolRight
     *
     * @param string $symbolRight
     *
     * @return OcCurrency
     */
    public function setSymbolRight($symbolRight)
    {
        $this->symbolRight = $symbolRight;

        return $this;
    }

    /**
     * Get symbolRight
     *
     * @return string
     */
    public function getSymbolRight()
    {
        return $this->symbolRight;
    }

    /**
     * Set decimalPlace
     *
     * @param string $decimalPlace
     *
     * @return OcCurrency
     */
    public function setDecimalPlace($decimalPlace)
    {
        $this->decimalPlace = $decimalPlace;

        return $this;
    }

    /**
     * Get decimalPlace
     *
     * @return string
     */
    public function getDecimalPlace()
    {
        return $this->decimalPlace;
    }

    /**
     * Set value
     *
     * @param float $value
     *
     * @return OcCurrency
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return OcCurrency
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return OcCurrency
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
     * Get currencyId
     *
     * @return integer
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }
}

