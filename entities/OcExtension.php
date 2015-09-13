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


    /**
     * Set type
     *
     * @param string $type
     *
     * @return OcExtension
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return OcExtension
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
     * Get extensionId
     *
     * @return integer
     */
    public function getExtensionId()
    {
        return $this->extensionId;
    }
}

