<?php



/**
 * OcManufacturerToStore
 */
class OcManufacturerToStore
{
    /**
     * @var integer
     */
    private $manufacturerId;

    /**
     * @var integer
     */
    private $storeId;


    /**
     * Set manufacturerId
     *
     * @param integer $manufacturerId
     *
     * @return OcManufacturerToStore
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * Get manufacturerId
     *
     * @return integer
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcManufacturerToStore
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

