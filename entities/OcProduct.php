<?php



/**
 * OcProduct
 */
class OcProduct
{
    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $upc;

    /**
     * @var string
     */
    private $ean;

    /**
     * @var string
     */
    private $jan;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $mpn;

    /**
     * @var string
     */
    private $location;

    /**
     * @var integer
     */
    private $quantity = '0';

    /**
     * @var string
     */
    private $image;

    /**
     * @var boolean
     */
    private $shipping = '1';

    /**
     * @var string
     */
    private $price = '0.0000';

    /**
     * @var integer
     */
    private $points = '0';

    /**
     * @var \DateTime
     */
    private $dateAvailable = '0000-00-00';

    /**
     * @var string
     */
    private $weight = '0.00000000';

    /**
     * @var string
     */
    private $length = '0.00000000';

    /**
     * @var string
     */
    private $width = '0.00000000';

    /**
     * @var string
     */
    private $height = '0.00000000';

    /**
     * @var boolean
     */
    private $subtract = '1';

    /**
     * @var integer
     */
    private $minimum = '1';

    /**
     * @var integer
     */
    private $sortOrder = '0';

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var integer
     */
    private $viewed = '0';

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
    private $productId;

    /**
     * @var \OcWeightClass
     */
    private $weightClass;

    /**
     * @var \OcLengthClass
     */
    private $lengthClass;

    /**
     * @var \OcStockStatus
     */
    private $stockStatus;

    /**
     * @var \OcTaxClass
     */
    private $taxClass;

    /**
     * @var \OcManufacturer
     */
    private $manufacturer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $download;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $store;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $filter;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->download = new \Doctrine\Common\Collections\ArrayCollection();
        $this->store = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filter = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

