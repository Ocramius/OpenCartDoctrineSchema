<?php



/**
 * OcCustomField
 */
class OcCustomField
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $location;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $customFieldId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customerGroup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customerGroup = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

