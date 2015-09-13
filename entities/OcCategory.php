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

    public function __construct(Doctrine\Common\Collections\Collection $product, Doctrine\Common\Collections\Collection $coupon, Doctrine\Common\Collections\Collection $store, Doctrine\Common\Collections\Collection $filter, Doctrine\Common\Collections\Collection $language, $parentId, $top, $column, $sortOrder, $status, DateTime $dateAdded, DateTime $dateModified, $image = null)
    {
        $this->product = $product;
        $this->coupon = $coupon;
        $this->store = $store;
        $this->filter = $filter;
        $this->language = $language;
        $this->parentId = $parentId;
        $this->top = $top;
        $this->column = $column;
        $this->sortOrder = $sortOrder;
        $this->status = $status;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
        $this->image = $image;
    }


}
