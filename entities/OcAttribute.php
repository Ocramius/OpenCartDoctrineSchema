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

    public function __construct(OcAttributeGroup $attributeGroup, Doctrine\Common\Collections\Collection $language, $sortOrder)
    {
        $this->attributeGroup = $attributeGroup;
        $this->language = $language;
        $this->sortOrder = $sortOrder;
    }


}
