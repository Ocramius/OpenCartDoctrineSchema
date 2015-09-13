<?php



/**
 * OcOrderStatus
 */
class OcOrderStatus
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $orderStatusId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcOrderStatus
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
     * Set orderStatusId
     *
     * @param integer $orderStatusId
     *
     * @return OcOrderStatus
     */
    public function setOrderStatusId($orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }

    /**
     * Get orderStatusId
     *
     * @return integer
     */
    public function getOrderStatusId()
    {
        return $this->orderStatusId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcOrderStatus
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

