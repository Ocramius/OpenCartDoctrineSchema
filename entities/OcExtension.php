<?php


/**
 * OcExtension
 */
class OcExtension
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $code;

    /**
     * @var integer
     */
    private $extensionId;

    public function __construct($type, $code)
    {
        $this->$type;
        $this->$code;
    }


}
