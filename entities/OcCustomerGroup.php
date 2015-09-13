<?php



/**
 * OcCustomerGroup
 */
class OcCustomerGroup
{
    /**
     * @var integer
     */
    private $approval;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $customerGroupId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $taxRate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customField;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->taxRate = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customField = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

