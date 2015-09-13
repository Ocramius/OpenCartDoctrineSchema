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


}

