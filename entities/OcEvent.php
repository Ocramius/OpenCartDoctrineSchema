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


    /**
     * Set code
     *
     * @param string $code
     *
     * @return OcEvent
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set trigger
     *
     * @param string $trigger
     *
     * @return OcEvent
     */
    public function setTrigger($trigger)
    {
        $this->trigger = $trigger;

        return $this;
    }

    /**
     * Get trigger
     *
     * @return string
     */
    public function getTrigger()
    {
        return $this->trigger;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return OcEvent
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Get eventId
     *
     * @return integer
     */
    public function getEventId()
    {
        return $this->eventId;
    }
}

