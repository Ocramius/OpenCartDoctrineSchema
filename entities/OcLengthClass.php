<?php



/**
 * OcLengthClass
 */
class OcLengthClass
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var integer
     */
    private $lengthClassId;


    /**
     * Set value
     *
     * @param string $value
     *
     * @return OcLengthClass
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
     * Get lengthClassId
     *
     * @return integer
     */
    public function getLengthClassId()
    {
        return $this->lengthClassId;
    }
}

