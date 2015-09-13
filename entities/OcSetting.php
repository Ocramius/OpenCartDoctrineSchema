<?php



/**
 * OcSetting
 */
class OcSetting
{
    /**
     * @var integer
     */
    private $storeId = '0';

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
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcSetting
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return integer
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return OcSetting
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
     * Set key
     *
     * @param string $key
     *
     * @return OcSetting
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return OcSetting
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set serialized
     *
     * @param boolean $serialized
     *
     * @return OcSetting
     */
    public function setSerialized($serialized)
    {
        $this->serialized = $serialized;

        return $this;
    }

    /**
     * Get serialized
     *
     * @return boolean
     */
    public function getSerialized()
    {
        return $this->serialized;
    }

    /**
     * Get settingId
     *
     * @return integer
     */
    public function getSettingId()
    {
        return $this->settingId;
    }
}

