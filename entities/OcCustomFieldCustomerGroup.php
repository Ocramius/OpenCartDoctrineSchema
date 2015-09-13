<?php



/**
 * OcCustomFieldCustomerGroup
 */
class OcCustomFieldCustomerGroup
{
    /**
     * @var boolean
     */
    private $required;

    /**
     * @var integer
     */
    private $customFieldId;

    /**
     * @var integer
     */
    private $customerGroupId;


    /**
     * Set required
     *
     * @param boolean $required
     *
     * @return OcCustomFieldCustomerGroup
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set customFieldId
     *
     * @param integer $customFieldId
     *
     * @return OcCustomFieldCustomerGroup
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
     * Set customerGroupId
     *
     * @param integer $customerGroupId
     *
     * @return OcCustomFieldCustomerGroup
     */
    public function setCustomerGroupId($customerGroupId)
    {
        $this->customerGroupId = $customerGroupId;

        return $this;
    }

    /**
     * Get customerGroupId
     *
     * @return integer
     */
    public function getCustomerGroupId()
    {
        return $this->customerGroupId;
    }
}

