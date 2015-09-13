<?php



/**
 * OcRecurringDescription
 */
class OcRecurringDescription
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $recurringId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcRecurringDescription
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
     * Set recurringId
     *
     * @param integer $recurringId
     *
     * @return OcRecurringDescription
     */
    public function setRecurringId($recurringId)
    {
        $this->recurringId = $recurringId;

        return $this;
    }

    /**
     * Get recurringId
     *
     * @return integer
     */
    public function getRecurringId()
    {
        return $this->recurringId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcRecurringDescription
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

