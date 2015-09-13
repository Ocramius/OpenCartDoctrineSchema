<?php



/**
 * OcReturnAction
 */
class OcReturnAction
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $returnActionId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcReturnAction
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
     * Set returnActionId
     *
     * @param integer $returnActionId
     *
     * @return OcReturnAction
     */
    public function setReturnActionId($returnActionId)
    {
        $this->returnActionId = $returnActionId;

        return $this;
    }

    /**
     * Get returnActionId
     *
     * @return integer
     */
    public function getReturnActionId()
    {
        return $this->returnActionId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcReturnAction
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

