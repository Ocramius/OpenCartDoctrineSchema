<?php


/**
 * OcTaxRate
 */
class OcTaxRate
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $rate = '0.0000';

    /**
     * @var string
     */
    private $type;

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
    private $taxRateId;

    /**
     * @var \OcGeoZone
     */
    private $geoZone;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customerGroup;

    public function __construct(OcGeoZone $geoZone, Doctrine\Common\Collections\Collection $customerGroup, $name, $rate, $type, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->$geoZone;
        $this->$customerGroup;
        $this->$name;
        $this->$rate;
        $this->$type;
        $this->$dateAdded;
        $this->$dateModified;
    }


}
