<?php


/**
 * OcMarketing
 */
class OcMarketing
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $code;

    /**
     * @var integer
     */
    private $clicks = '0';

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $marketingId;

    public function __construct($name, $description, $code, $clicks, DateTime $dateAdded)
    {
        $this->$name;
        $this->$description;
        $this->$code;
        $this->$clicks;
        $this->$dateAdded;
    }


}
