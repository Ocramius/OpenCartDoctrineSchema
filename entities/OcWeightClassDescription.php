<?php



/**
 * OcWeightClassDescription
 */
class OcWeightClassDescription
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
    private $weightClassId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcWeightClassDescription
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
     * @return OcWeightClassDescription
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
     * Set weightClassId
     *
     * @param integer $weightClassId
     *
     * @return OcWeightClassDescription
     */
    public function setWeightClassId($weightClassId)
    {
        $this->weightClassId = $weightClassId;

        return $this;
    }

    /**
     * Get weightClassId
     *
     * @return integer
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcWeightClassDescription
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

