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

    public function __construct(Doctrine\Common\Collections\Collection $taxRate, Doctrine\Common\Collections\Collection $language, Doctrine\Common\Collections\Collection $customField, $approval, $sortOrder)
    {
        $this->$taxRate;
        $this->$language;
        $this->$customField;
        $this->$approval;
        $this->$sortOrder;
    }


}
