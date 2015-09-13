<?php



/**
 * OcCustomFieldValueDescription
 */
class OcCustomFieldValueDescription
{
    /**
     * @var integer
     */
    private $customFieldId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $customFieldValueId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set customFieldId
     *
     * @param integer $customFieldId
     *
     * @return OcCustomFieldValueDescription
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
     * Set name
     *
     * @param string $name
     *
     * @return OcCustomFieldValueDescription
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set customFieldValueId
     *
     * @param integer $customFieldValueId
     *
     * @return OcCustomFieldValueDescription
     */
    public function setCustomFieldValueId($customFieldValueId)
    {
        $this->customFieldValueId = $customFieldValueId;

        return $this;
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

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcCustomFieldValueDescription
     */
    public function setLanguageId($languageId)
    {
        $this->languageId = $languageId;

        return $this;
    }

    /**
     * Get languageId
     *
     * @return integer
     */
    public function getLanguageId()
    {
        return $this->languageId;
    }
}

