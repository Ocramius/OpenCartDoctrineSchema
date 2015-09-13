<?php


/**
 * OcProductOption
 */
class OcProductOption
{

    /**
     * @var string
     */
    private $value;

    /**
     * @var boolean
     */
    private $required;

    /**
     * @var integer
     */
    private $productOptionId;

    /**
     * @var \OcOption
     */
    private $option;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcOption $option, OcProduct $product, $value, $required)
    {
        $this->option = $option;
        $this->product = $product;
        $this->value = $value;
        $this->required = $required;
    }


}
