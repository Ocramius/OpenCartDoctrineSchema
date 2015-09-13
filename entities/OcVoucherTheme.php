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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

