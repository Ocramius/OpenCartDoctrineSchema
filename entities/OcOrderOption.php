<?php


/**
 * OcOrderOption
 */
class OcOrderOption
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $orderOptionId;

    /**
     * @var \OcOrderProduct
     */
    private $orderProduct;

    /**
     * @var \OcProductOptionValue
     */
    private $productOptionValue;

    /**
     * @var \OcProductOption
     */
    private $productOption;

    /**
     * @var \OcOrder
     */
    private $order;

    public function __construct(OcOrderProduct $orderProduct, OcProductOptionValue $productOptionValue, OcProductOption $productOption, OcOrder $order, $name, $value, $type)
    {
        $this->orderProduct = $orderProduct;
        $this->productOptionValue = $productOptionValue;
        $this->productOption = $productOption;
        $this->order = $order;
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
    }


}
