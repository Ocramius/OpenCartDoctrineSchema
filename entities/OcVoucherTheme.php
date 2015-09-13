<?php



/**
 * OcVoucherTheme
 */
class OcVoucherTheme
{
    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $voucherThemeId;


    /**
     * Set image
     *
     * @param string $image
     *
     * @return OcVoucherTheme
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
     * Get voucherThemeId
     *
     * @return integer
     */
    public function getVoucherThemeId()
    {
        return $this->voucherThemeId;
    }
}

