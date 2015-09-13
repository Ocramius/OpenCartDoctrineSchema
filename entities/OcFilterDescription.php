<?php



/**
 * OcFilterDescription
 */
class OcFilterDescription
{
    /**
     * @var integer
     */
    private $filterGroupId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $filterId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set filterGroupId
     *
     * @param integer $filterGroupId
     *
     * @return OcFilterDescription
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
     * Set name
     *
     * @param string $name
     *
     * @return OcFilterDescription
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
     * Set filterId
     *
     * @param integer $filterId
     *
     * @return OcFilterDescription
     */
    public function setFilterId($filterId)
    {
        $this->filterId = $filterId;

        return $this;
    }

    /**
     * Get filterId
     *
     * @return integer
     */
    public function getFilterId()
    {
        return $this->filterId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcFilterDescription
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

