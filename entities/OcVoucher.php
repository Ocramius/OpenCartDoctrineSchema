<?php


/**
 * OcVoucher
 */
class OcVoucher
{

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
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $voucherId;

    /**
     * @var \OcVoucherTheme
     */
    private $voucherTheme;

    /**
     * @var \OcOrder
     */
    private $order;

    public function __construct(OcVoucherTheme $voucherTheme, OcOrder $order, $code, $fromName, $fromEmail, $toName, $toEmail, $message, $amount, $status, DateTime $dateAdded)
    {
        $this->voucherTheme = $voucherTheme;
        $this->order = $order;
        $this->code = $code;
        $this->fromName = $fromName;
        $this->fromEmail = $fromEmail;
        $this->toName = $toName;
        $this->toEmail = $toEmail;
        $this->message = $message;
        $this->amount = $amount;
        $this->status = $status;
        $this->dateAdded = $dateAdded;
    }


}
