<?php


/**
 * OcReturnReason
 */
class OcReturnReason
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $returnReasonId;

    /**
     * @var \OcLanguage
     */
    private $language;

    public function __construct(OcLanguage $language, $name, $returnReasonId)
    {
        $this->$language;
        $this->$name;
        $this->$returnReasonId;
    }


}
