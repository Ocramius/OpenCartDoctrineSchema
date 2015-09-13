<?php


/**
 * OcTaxClass
 */
class OcTaxClass
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

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
    private $taxClassId;

    public function __construct($title, $description, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->title = $title;
        $this->description = $description;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
    }


}
