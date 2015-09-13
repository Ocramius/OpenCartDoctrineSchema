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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->customerGroup = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

