<?php


/**
 * OcGeoZone
 */
class OcGeoZone
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
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $geoZoneId;

    public function __construct($name, $description, DateTime $dateModified, DateTime $dateAdded)
    {
        $this->name = $name;
        $this->description = $description;
        $this->dateModified = $dateModified;
        $this->dateAdded = $dateAdded;
    }


}
