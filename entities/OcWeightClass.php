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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

