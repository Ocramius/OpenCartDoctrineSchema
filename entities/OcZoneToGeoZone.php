<?php



/**
 * OcZoneToGeoZone
 */
class OcZoneToGeoZone
{
    /**
     * @var integer
     */
    private $countryId;

    /**
     * @var integer
     */
    private $zoneId = '0';

    /**
     * @var integer
     */
    private $geoZoneId;

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
     * Set countryId
     *
     * @param integer $countryId
     *
     * @return OcZoneToGeoZone
     */
    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * Get countryId
     *
     * @return integer
     */
    public function getCountryId()
    {
        return $this->countryId;
    }

    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return OcZoneToGeoZone
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId
     *
     * @return integer
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set geoZoneId
     *
     * @param integer $geoZoneId
     *
     * @return OcZoneToGeoZone
     */
    public function setGeoZoneId($geoZoneId)
    {
        $this->geoZoneId = $geoZoneId;

        return $this;
    }

    /**
     * Get geoZoneId
     *
     * @return integer
     */
    public function getGeoZoneId()
    {
        return $this->geoZoneId;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcZoneToGeoZone
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return OcZoneToGeoZone
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
     * Get zoneToGeoZoneId
     *
     * @return integer
     */
    public function getZoneToGeoZoneId()
    {
        return $this->zoneToGeoZoneId;
    }
}

