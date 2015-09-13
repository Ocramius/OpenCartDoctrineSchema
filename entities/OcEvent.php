<?php


/**
 * OcEvent
 */
class OcEvent
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $trigger;

    /**
     * @var string
     */
    private $action;

    /**
     * @var integer
     */
    private $eventId;

    public function __construct($code, $trigger, $action)
    {
        $this->$code;
        $this->$trigger;
        $this->$action;
    }


}
