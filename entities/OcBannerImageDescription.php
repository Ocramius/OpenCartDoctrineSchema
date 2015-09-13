<?php



/**
 * OcBannerImageDescription
 */
class OcBannerImageDescription
{
    /**
     * @var integer
     */
    private $bannerId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $bannerImageId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set bannerId
     *
     * @param integer $bannerId
     *
     * @return OcBannerImageDescription
     */
    public function setBannerId($bannerId)
    {
        $this->bannerId = $bannerId;

        return $this;
    }

    /**
     * Get bannerId
     *
     * @return integer
     */
    public function getBannerId()
    {
        return $this->bannerId;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return OcBannerImageDescription
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set bannerImageId
     *
     * @param integer $bannerImageId
     *
     * @return OcBannerImageDescription
     */
    public function setBannerImageId($bannerImageId)
    {
        $this->bannerImageId = $bannerImageId;

        return $this;
    }

    /**
     * Get bannerImageId
     *
     * @return integer
     */
    public function getBannerImageId()
    {
        return $this->bannerImageId;
    }

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcBannerImageDescription
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

