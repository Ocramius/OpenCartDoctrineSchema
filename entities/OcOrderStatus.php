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
        $this->$language;
        $this->$name;
        $this->$orderStatusId;
    }


}
