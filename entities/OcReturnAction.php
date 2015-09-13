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
        $this->language = $language;
        $this->name = $name;
        $this->returnActionId = $returnActionId;
    }


}
