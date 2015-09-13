<?php



/**
 * OcReturnReason
 */
class OcReturnReason
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $returnReasonId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcReturnReason
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
     * Set returnReasonId
     *
     * @param integer $returnReasonId
     *
     * @return OcReturnReason
     */
    public function setReturnReasonId($returnReasonId)
    {
        $this->returnReasonId = $returnReasonId;

        return $this;
    }

    /**
     * Get returnReasonId
     *
     * @return integer
     */
    public function getReturnReasonId()
    {
        return $this->returnReasonId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcReturnReason
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

