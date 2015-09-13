<?php



/**
 * OcInformationToStore
 */
class OcInformationToStore
{
    /**
     * @var integer
     */
    private $informationId;

    /**
     * @var integer
     */
    private $storeId;


    /**
     * Set informationId
     *
     * @param integer $informationId
     *
     * @return OcInformationToStore
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
     * @return OcInformationToStore
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

