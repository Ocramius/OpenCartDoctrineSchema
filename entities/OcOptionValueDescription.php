<?php



/**
 * OcOptionValueDescription
 */
class OcOptionValueDescription
{
    /**
     * @var integer
     */
    private $optionId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $optionValueId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set optionId
     *
     * @param integer $optionId
     *
     * @return OcOptionValueDescription
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
     * Set name
     *
     * @param string $name
     *
     * @return OcOptionValueDescription
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
     * Set optionValueId
     *
     * @param integer $optionValueId
     *
     * @return OcOptionValueDescription
     */
    public function setOptionValueId($optionValueId)
    {
        $this->optionValueId = $optionValueId;

        return $this;
    }

    /**
     * Get optionValueId
     *
     * @return integer
     */
    public function getOptionValueId()
    {
        return $this->optionValueId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcOptionValueDescription
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

