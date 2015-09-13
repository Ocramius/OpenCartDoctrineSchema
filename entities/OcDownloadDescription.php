<?php



/**
 * OcDownloadDescription
 */
class OcDownloadDescription
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $downloadId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcDownloadDescription
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
     * Set downloadId
     *
     * @param integer $downloadId
     *
     * @return OcDownloadDescription
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

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcDownloadDescription
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

