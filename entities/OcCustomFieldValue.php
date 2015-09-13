<?php



/**
 * OcCustomFieldValue
 */
class OcCustomFieldValue
{
    /**
     * @var integer
     */
    private $customFieldId;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $customFieldValueId;


    /**
     * Set customFieldId
     *
     * @param integer $customFieldId
     *
     * @return OcCustomFieldValue
     */
    public function setCustomFieldId($customFieldId)
    {
        $this->customFieldId = $customFieldId;

        return $this;
    }

    /**
     * Get customFieldId
     *
     * @return integer
     */
    public function getCustomFieldId()
    {
        return $this->customFieldId;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcCustomFieldValue
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
     * Get customFieldValueId
     *
     * @return integer
     */
    public function getCustomFieldValueId()
    {
        return $this->customFieldValueId;
    }
}

