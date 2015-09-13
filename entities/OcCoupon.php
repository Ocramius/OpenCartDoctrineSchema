<?php


/**
 * OcCoupon
 */
class OcCoupon
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $discount;

    /**
     * @var boolean
     */
    private $logged;

    /**
     * @var boolean
     */
    private $shipping;

    /**
     * @var string
     */
    private $total;

    /**
     * @var \DateTime
     */
    private $dateStart = '0000-00-00';

    /**
     * @var \DateTime
     */
    private $dateEnd = '0000-00-00';

    /**
     * @var integer
     */
    private $usesTotal;

    /**
     * @var string
     */
    private $usesCustomer;

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
    private $couponId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    public function __construct(Doctrine\Common\Collections\Collection $category, $name, $code, $type, $discount, $logged, $shipping, $total, $dateStart, $dateEnd, $usesTotal, $usesCustomer, $status, DateTime $dateAdded)
    {
        $this->$category;
        $this->$name;
        $this->$code;
        $this->$type;
        $this->$discount;
        $this->$logged;
        $this->$shipping;
        $this->$total;
        $this->$dateStart;
        $this->$dateEnd;
        $this->$usesTotal;
        $this->$usesCustomer;
        $this->$status;
        $this->$dateAdded;
    }


}
