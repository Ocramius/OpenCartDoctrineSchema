<?php


/**
 * OcModification
 */
class OcModification
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $xml;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $modificationId;

    public function __construct($name, $code, $author, $version, $link, $xml, $status, DateTime $dateAdded)
    {
        $this->$name;
        $this->$code;
        $this->$author;
        $this->$version;
        $this->$link;
        $this->$xml;
        $this->$status;
        $this->$dateAdded;
    }


}
