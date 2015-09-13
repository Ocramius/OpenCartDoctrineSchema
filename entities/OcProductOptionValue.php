<?php


/**
 * OcProductOptionValue
 */
class OcProductOptionValue
{

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var boolean
     */
    private $subtract;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $pricePrefix;

    /**
     * @var integer
     */
    private $points;

    /**
     * @var string
     */
    private $pointsPrefix;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $weightPrefix;

    /**
     * @var integer
     */
    private $productOptionValueId;

    /**
     * @var \OcOptionValue
     */
    private $optionValue;

    /**
     * @var \OcProductOption
     */
    private $productOption;

    /**
     * @var \OcOption
     */
    private $option;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcOptionValue $optionValue, OcProductOption $productOption, OcOption $option, OcProduct $product, $quantity, $subtract, $price, $pricePrefix, $points, $pointsPrefix, $weight, $weightPrefix)
    {
        $this->$optionValue;
        $this->$productOption;
        $this->$option;
        $this->$product;
        $this->$quantity;
        $this->$subtract;
        $this->$price;
        $this->$pricePrefix;
        $this->$points;
        $this->$pointsPrefix;
        $this->$weight;
        $this->$weightPrefix;
    }


}
