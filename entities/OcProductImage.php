<?php


/**
 * OcProductImage
 */
class OcProductImage
{

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $sortOrder = '0';

    /**
     * @var integer
     */
    private $productImageId;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcProduct $product, $sortOrder, $image = null)
    {
        $this->$product;
        $this->$sortOrder;
        $this->$image;
    }


}
