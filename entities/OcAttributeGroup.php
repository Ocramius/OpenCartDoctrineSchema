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
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcAttributeGroup
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Get attributeGroupId
     *
     * @return integer
     */
    public function getAttributeGroupId()
    {
        return $this->attributeGroupId;
    }
}

