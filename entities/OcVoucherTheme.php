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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    public function __construct(Doctrine\Common\Collections\Collection $language, $image)
    {
        $this->$language;
        $this->$image;
    }


}
