<?php



/**
 * OcLengthClassDescription
 */
class OcLengthClassDescription
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $unit;

    /**
     * @var integer
     */
    private $lengthClassId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcLengthClassDescription
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set unit
     *
     * @param string $unit
     *
     * @return OcLengthClassDescription
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set lengthClassId
     *
     * @param integer $lengthClassId
     *
     * @return OcLengthClassDescription
     */
    public function setLengthClassId($lengthClassId)
    {
        $this->lengthClassId = $lengthClassId;

        return $this;
    }

    /**
     * Get lengthClassId
     *
     * @return integer
     */
    public function getLengthClassId()
    {
        return $this->lengthClassId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcLengthClassDescription
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

