<?php



/**
 * OcApiIp
 */
class OcApiIp
{
    /**
     * @var integer
     */
    private $apiId;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var integer
     */
    private $apiIpId;


    /**
     * Set apiId
     *
     * @param integer $apiId
     *
     * @return OcApiIp
     */
    public function setApiId($apiId)
    {
        $this->apiId = $apiId;

        return $this;
    }

    /**
     * Get apiId
     *
     * @return integer
     */
    public function getApiId()
    {
        return $this->apiId;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return OcApiIp
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Get apiIpId
     *
     * @return integer
     */
    public function getApiIpId()
    {
        return $this->apiIpId;
    }
}

