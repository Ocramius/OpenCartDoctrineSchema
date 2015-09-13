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
        $this->language = $language;
        $this->name = $name;
        $this->returnReasonId = $returnReasonId;
    }


}
