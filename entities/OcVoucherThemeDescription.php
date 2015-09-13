<?php



/**
 * OcVoucherThemeDescription
 */
class OcVoucherThemeDescription
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $voucherThemeId;

    /**
     * @var integer
     */
    private $languageId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcVoucherThemeDescription
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
     * Set voucherThemeId
     *
     * @param integer $voucherThemeId
     *
     * @return OcVoucherThemeDescription
     */
    public function setVoucherThemeId($voucherThemeId)
    {
        $this->voucherThemeId = $voucherThemeId;

        return $this;
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

    /**
     * Set languageId
     *
     * @param integer $languageId
     *
     * @return OcVoucherThemeDescription
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

