<?php


/**
 * OcApi
 */
class OcApi
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $key;

    /**
     * @var boolean
     */
    private $status;

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
    private $apiId;

    public function __construct($name, $key, $status, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->$name;
        $this->$key;
        $this->$status;
        $this->$dateAdded;
        $this->$dateModified;
    }


}
