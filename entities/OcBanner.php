<?php


/**
 * OcBanner
 */
class OcBanner
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $bannerId;

    public function __construct($name, $status)
    {
        $this->name = $name;
        $this->status = $status;
    }


}
