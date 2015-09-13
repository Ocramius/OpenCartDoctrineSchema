<?php


/**
 * OcVoucherHistory
 */
class OcVoucherHistory
{

    /**
     * @var string
     */
    private $amount;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $voucherHistoryId;

    /**
     * @var \OcOrder
     */
    private $order;

    /**
     * @var \OcVoucher
     */
    private $voucher;

    public function __construct(OcOrder $order, OcVoucher $voucher, $amount, DateTime $dateAdded)
    {
        $this->order = $order;
        $this->voucher = $voucher;
        $this->amount = $amount;
        $this->dateAdded = $dateAdded;
    }


}
