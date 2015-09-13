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
        $this->geoZone = $geoZone;
        $this->customerGroup = $customerGroup;
        $this->name = $name;
        $this->rate = $rate;
        $this->type = $type;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
    }


}
