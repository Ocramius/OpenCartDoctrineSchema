<?php



/**
 * OcBannerImage
 */
class OcBannerImage
{
    /**
     * @var integer
     */
    private $bannerId;

    /**
     * @var string
     */
    private $link;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $sortOrder = '0';

    /**
     * @var integer
     */
    private $bannerImageId;


    /**
     * Set bannerId
     *
     * @param integer $bannerId
     *
     * @return OcBannerImage
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
     * Set link
     *
     * @param string $link
     *
     * @return OcBannerImage
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return OcBannerImage
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcBannerImage
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
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
}

