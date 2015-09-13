<?php


/**
 * OcOrderTotal
 */
class OcOrderTotal
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $value = '0.0000';

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $orderTotalId;

    /**
     * @var \OcOrder
     */
    private $order;

    public function __construct(OcOrder $order, $code, $title, $value, $sortOrder)
    {
        $this->order = $order;
        $this->code = $code;
        $this->title = $title;
        $this->value = $value;
        $this->sortOrder = $sortOrder;
    }


}
