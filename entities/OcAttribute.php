<?php



/**
 * OcAttribute
 */
class OcAttribute
{
    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $attributeId;

    /**
     * @var \OcAttributeGroup
     */
    private $attributeGroup;

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

