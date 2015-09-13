<?php


/**
 * OcProductRelated
 */
class OcProductRelated
{

    /**
     * @var integer
     */
    private $relatedId;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcProduct $product, $relatedId)
    {
        $this->product = $product;
        $this->relatedId = $relatedId;
    }


}
