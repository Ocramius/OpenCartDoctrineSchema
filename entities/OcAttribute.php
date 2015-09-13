<?php



/**
 * OcAttribute
 */
class OcAttribute
{
    /**
     * @var integer
     */
    private $attributeGroupId;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $attributeId;


    /**
     * Set attributeGroupId
     *
     * @param integer $attributeGroupId
     *
     * @return OcAttribute
     */
    public function setAttributeGroupId($attributeGroupId)
    {
        $this->attributeGroupId = $attributeGroupId;

        return $this;
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

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcAttribute
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
     * Get attributeId
     *
     * @return integer
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }
}

