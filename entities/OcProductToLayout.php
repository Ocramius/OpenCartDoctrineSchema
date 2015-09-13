<?php


/**
 * OcProductToLayout
 */
class OcProductToLayout
{

    /**
     * @var \OcProduct
     */
    private $product;

    /**
     * @var \OcStore
     */
    private $store;

    /**
     * @var \OcLayout
     */
    private $layout;

    public function __construct(OcProduct $product, OcStore $store, OcLayout $layout)
    {
        $this->$product;
        $this->$store;
        $this->$layout;
    }


}
