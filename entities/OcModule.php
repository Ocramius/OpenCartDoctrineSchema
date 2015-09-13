<?php


/**
 * OcModule
 */
class OcModule
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $setting;

    /**
     * @var integer
     */
    private $moduleId;

    public function __construct($name, $code, $setting)
    {
        $this->name = $name;
        $this->code = $code;
        $this->setting = $setting;
    }


}
