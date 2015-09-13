<?php



/**
 * OcWeightClass
 */
class OcWeightClass
{
    /**
     * @var string
     */
    private $value = '0.00000000';

    /**
     * @var integer
     */
    private $weightClassId;


    /**
     * Set value
     *
     * @param string $value
     *
     * @return OcWeightClass
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
     * Get weightClassId
     *
     * @return integer
     */
    public function getWeightClassId()
    {
        return $this->weightClassId;
    }
}

