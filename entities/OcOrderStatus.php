<?php


/**
 * OcOrderStatus
 */
class OcOrderStatus
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $orderStatusId;

    /**
     * @var \OcLanguage
     */
    private $language;

    public function __construct(OcLanguage $language, $name, $orderStatusId)
    {
        $this->language = $language;
        $this->name = $name;
        $this->orderStatusId = $orderStatusId;
    }


}
