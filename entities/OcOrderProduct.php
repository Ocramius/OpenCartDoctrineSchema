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


}

