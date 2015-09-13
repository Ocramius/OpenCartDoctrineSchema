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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    public function __construct(Doctrine\Common\Collections\Collection $language, $value)
    {
        $this->language = $language;
        $this->value = $value;
    }


}
