<?php


/**
 * OcOrderHistory
 */
class OcOrderHistory
{

    /**
     * @var boolean
     */
    private $notify = '0';

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $orderHistoryId;

    /**
     * @var \OcOrderStatus
     */
    private $orderStatus;

    /**
     * @var \OcOrder
     */
    private $order;

    public function __construct(OcOrderStatus $orderStatus, OcOrder $order, $notify, $comment, DateTime $dateAdded)
    {
        $this->$orderStatus;
        $this->$order;
        $this->$notify;
        $this->$comment;
        $this->$dateAdded;
    }


}
