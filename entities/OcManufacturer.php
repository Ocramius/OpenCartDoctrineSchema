<?php



/**
 * OcManufacturer
 */
class OcManufacturer
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $manufacturerId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $store;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->store = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

