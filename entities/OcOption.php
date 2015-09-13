<?php



/**
 * OcOption
 */
class OcOption
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $optionId;

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

