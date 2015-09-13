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

    public function __construct(OcWeightClass $weightClass, OcLengthClass $lengthClass, OcStockStatus $stockStatus, OcTaxClass $taxClass, OcManufacturer $manufacturer, Doctrine\Common\Collections\Collection $download, Doctrine\Common\Collections\Collection $store, Doctrine\Common\Collections\Collection $filter, Doctrine\Common\Collections\Collection $language, Doctrine\Common\Collections\Collection $category, $model, $sku, $upc, $ean, $jan, $isbn, $mpn, $location, $quantity, $shipping, $price, $points, $dateAvailable, $weight, $length, $width, $height, $subtract, $minimum, $sortOrder, $status, $viewed, DateTime $dateAdded, DateTime $dateModified, $image = null)
    {
        $this->weightClass = $weightClass;
        $this->lengthClass = $lengthClass;
        $this->stockStatus = $stockStatus;
        $this->taxClass = $taxClass;
        $this->manufacturer = $manufacturer;
        $this->download = $download;
        $this->store = $store;
        $this->filter = $filter;
        $this->language = $language;
        $this->category = $category;
        $this->model = $model;
        $this->sku = $sku;
        $this->upc = $upc;
        $this->ean = $ean;
        $this->jan = $jan;
        $this->isbn = $isbn;
        $this->mpn = $mpn;
        $this->location = $location;
        $this->quantity = $quantity;
        $this->shipping = $shipping;
        $this->price = $price;
        $this->points = $points;
        $this->dateAvailable = $dateAvailable;
        $this->weight = $weight;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->subtract = $subtract;
        $this->minimum = $minimum;
        $this->sortOrder = $sortOrder;
        $this->status = $status;
        $this->viewed = $viewed;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
        $this->image = $image;
    }


}
