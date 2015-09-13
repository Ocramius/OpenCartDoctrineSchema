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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

