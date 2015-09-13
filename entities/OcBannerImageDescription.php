<?php


/**
 * OcBannerImageDescription
 */
class OcBannerImageDescription
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var \OcBannerImage
     */
    private $bannerImage;

    /**
     * @var \OcLanguage
     */
    private $language;

    /**
     * @var \OcBanner
     */
    private $banner;

    public function __construct(OcBannerImage $bannerImage, OcLanguage $language, OcBanner $banner, $title)
    {
        $this->bannerImage = $bannerImage;
        $this->language = $language;
        $this->banner = $banner;
        $this->title = $title;
    }


}
