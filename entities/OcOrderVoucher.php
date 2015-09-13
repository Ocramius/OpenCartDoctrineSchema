<?php


/**
 * OcOrderVoucher
 */
class OcOrderVoucher
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $fromName;

    /**
     * @var string
     */
    private $fromEmail;

    /**
     * @var string
     */
    private $toName;

    /**
     * @var string
     */
    private $toEmail;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var integer
     */
    private $orderVoucherId;

    /**
     * @var \OcVoucherTheme
     */
    private $voucherTheme;

    /**
     * @var \OcOrder
     */
    private $order;

    /**
     * @var \OcVoucher
     */
    private $voucher;

    public function __construct(OcVoucherTheme $voucherTheme, OcOrder $order, OcVoucher $voucher, $description, $code, $fromName, $fromEmail, $toName, $toEmail, $message, $amount)
    {
        $this->$voucherTheme;
        $this->$order;
        $this->$voucher;
        $this->$description;
        $this->$code;
        $this->$fromName;
        $this->$fromEmail;
        $this->$toName;
        $this->$toEmail;
        $this->$message;
        $this->$amount;
    }


}
