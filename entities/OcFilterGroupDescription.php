<?php



/**
 * OcFilterGroupDescription
 */
class OcFilterGroupDescription
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $filterGroupId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcFilterGroupDescription
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
     * Set filterGroupId
     *
     * @param integer $filterGroupId
     *
     * @return OcFilterGroupDescription
     */
    public function setFilterGroupId($filterGroupId)
    {
        $this->filterGroupId = $filterGroupId;

        return $this;
    }

    /**
     * Get filterGroupId
     *
     * @return integer
     */
    public function getFilterGroupId()
    {
        return $this->filterGroupId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcFilterGroupDescription
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

