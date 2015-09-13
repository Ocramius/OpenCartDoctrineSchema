<?php



/**
 * OcCustomFieldDescription
 */
class OcCustomFieldDescription
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $customFieldId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcCustomFieldDescription
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
     * Set customFieldId
     *
     * @param integer $customFieldId
     *
     * @return OcCustomFieldDescription
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
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcCustomFieldDescription
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

