<?php



/**
 * OcOptionDescription
 */
class OcOptionDescription
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $optionId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcOptionDescription
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
     * Set optionId
     *
     * @param integer $optionId
     *
     * @return OcOptionDescription
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get optionId
     *
     * @return integer
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcOptionDescription
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

