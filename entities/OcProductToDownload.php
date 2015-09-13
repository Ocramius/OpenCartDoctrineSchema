<?php



/**
 * OcProductToDownload
 */
class OcProductToDownload
{
    /**
     * @var integer
     */
    private $productId;

    /**
     * @var integer
     */
    private $downloadId;


    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return OcProductToDownload
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set downloadId
     *
     * @param integer $downloadId
     *
     * @return OcProductToDownload
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;

        return $this;
    }

    /**
     * Get downloadId
     *
     * @return integer
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }
}

