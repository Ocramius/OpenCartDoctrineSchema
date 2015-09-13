<?php


/**
 * OcReturnStatus
 */
class OcReturnStatus
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $returnStatusId;

    /**
     * @var \OcLanguage
     */
    private $language;

    public function __construct(OcLanguage $language, $name, $returnStatusId)
    {
        $this->$language;
        $this->$name;
        $this->$returnStatusId;
    }


}
