<?php


/**
 * OcApiSession
 */
class OcApiSession
{

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var string
     */
    private $sessionName;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $apiSessionId;

    /**
     * @var \OcApi
     */
    private $api;

    public function __construct(OcApi $api, $token, $sessionId, $sessionName, $ip, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->api = $api;
        $this->token = $token;
        $this->sessionId = $sessionId;
        $this->sessionName = $sessionName;
        $this->ip = $ip;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
    }


}
