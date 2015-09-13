<?php



/**
 * OcAttributeGroup
 */
class OcAttributeGroup
{
    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $attributeGroupId;

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

