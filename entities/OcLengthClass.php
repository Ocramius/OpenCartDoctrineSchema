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

