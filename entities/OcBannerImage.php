<?php


/**
 * OcBannerImage
 */
class OcBannerImage
{

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
     * @var \OcBanner
     */
    private $banner;

    public function __construct(OcBanner $banner, $link, $image, $sortOrder)
    {
        $this->$banner;
        $this->$link;
        $this->$image;
        $this->$sortOrder;
    }


}
