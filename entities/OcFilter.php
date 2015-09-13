<?php


/**
 * OcFilter
 */
class OcFilter
{

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $filterId;

    /**
     * @var \OcFilterGroup
     */
    private $filterGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    public function __construct(OcFilterGroup $filterGroup, Doctrine\Common\Collections\Collection $product, Doctrine\Common\Collections\Collection $category, $sortOrder)
    {
        $this->$filterGroup;
        $this->$product;
        $this->$category;
        $this->$sortOrder;
    }


}
