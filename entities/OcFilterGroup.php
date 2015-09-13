<?php



/**
 * OcFilterGroup
 */
class OcFilterGroup
{
    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $filterGroupId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

