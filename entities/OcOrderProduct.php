<?php


/**
 * OcOrderProduct
 */
class OcOrderProduct
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $model;

    /**
     * @var integer
     */
    private $quantity;

    /**
     * @var string
     */
    private $price = '0.0000';

    /**
     * @var string
     */
    private $total = '0.0000';

    /**
     * @var string
     */
    private $tax = '0.0000';

    /**
     * @var integer
     */
    private $reward;

    /**
     * @var integer
     */
    private $orderProductId;

    /**
     * @var \OcOrder
     */
    private $order;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcOrder $order, OcProduct $product, $name, $model, $quantity, $price, $total, $tax, $reward)
    {
        $this->order = $order;
        $this->product = $product;
        $this->name = $name;
        $this->model = $model;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->total = $total;
        $this->tax = $tax;
        $this->reward = $reward;
    }


}
