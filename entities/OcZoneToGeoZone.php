<?php


/**
 * OcZoneToGeoZone
 */
class OcZoneToGeoZone
{

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
    private $zoneToGeoZoneId;

    /**
     * @var \OcCountry
     */
    private $country;

    /**
     * @var \OcZone
     */
    private $zone;

    /**
     * @var \OcGeoZone
     */
    private $geoZone;

    public function __construct(OcCountry $country, OcZone $zone, OcGeoZone $geoZone, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->country = $country;
        $this->zone = $zone;
        $this->geoZone = $geoZone;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
    }


}
