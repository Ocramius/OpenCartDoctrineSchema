<?php



/**
 * OcStockStatus
 */
class OcStockStatus
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $stockStatusId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcStockStatus
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
     * Set stockStatusId
     *
     * @param integer $stockStatusId
     *
     * @return OcStockStatus
     */
    public function setStockStatusId($stockStatusId)
    {
        $this->stockStatusId = $stockStatusId;

        return $this;
    }

    /**
     * Get stockStatusId
     *
     * @return integer
     */
    public function getStockStatusId()
    {
        return $this->stockStatusId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcStockStatus
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

