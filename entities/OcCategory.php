<?php



/**
 * OcCategory
 */
class OcCategory
{
    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $parentId = '0';

    /**
     * @var boolean
     */
    private $top;

    /**
     * @var integer
     */
    private $column;

    /**
     * @var integer
     */
    private $sortOrder = '0';

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $coupon;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $store;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $filter;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
        $this->coupon = new \Doctrine\Common\Collections\ArrayCollection();
        $this->store = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filter = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

