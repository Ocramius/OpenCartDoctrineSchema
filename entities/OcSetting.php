<?php


/**
 * OcSetting
 */
class OcSetting
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $value;

    /**
     * @var boolean
     */
    private $serialized;

    /**
     * @var integer
     */
    private $settingId;

    /**
     * @var \OcStore
     */
    private $store;

    public function __construct(OcStore $store, $code, $key, $value, $serialized)
    {
        $this->$store;
        $this->$code;
        $this->$key;
        $this->$value;
        $this->$serialized;
    }


}
