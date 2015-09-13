<?php


/**
 * OcReturnAction
 */
class OcReturnAction
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $returnActionId;

    /**
     * @var \OcLanguage
     */
    private $language;

    public function __construct(OcLanguage $language, $name, $returnActionId)
    {
        $this->$language;
        $this->$name;
        $this->$returnActionId;
    }


}
