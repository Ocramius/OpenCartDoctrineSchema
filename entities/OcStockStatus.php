<?php


/**
 * OcStockStatus
 */
class OcStockStatus
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $stockStatusId;

    /**
     * @var \OcLanguage
     */
    private $language;

    public function __construct(OcLanguage $language, $name, $stockStatusId)
    {
        $this->language = $language;
        $this->name = $name;
        $this->stockStatusId = $stockStatusId;
    }


}
