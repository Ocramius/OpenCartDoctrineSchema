<?php



/**
 * OcInformationToLayout
 */
class OcInformationToLayout
{
    /**
     * @var integer
     */
    private $layoutId;

    /**
     * @var integer
     */
    private $informationId;

    /**
     * @var integer
     */
    private $storeId;


    /**
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return OcInformationToLayout
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    /**
     * Get layoutId
     *
     * @return integer
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * Set informationId
     *
     * @param integer $informationId
     *
     * @return OcInformationToLayout
     */
    public function setInformationId($informationId)
    {
        $this->informationId = $informationId;

        return $this;
    }

    /**
     * Get informationId
     *
     * @return integer
     */
    public function getInformationId()
    {
        return $this->informationId;
    }

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcInformationToLayout
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return integer
     */
    public function getStoreId()
    {
        return $this->storeId;
    }
}

