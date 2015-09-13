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

    public function __construct(Doctrine\Common\Collections\Collection $language, Doctrine\Common\Collections\Collection $customerGroup, $type, $value, $location, $status, $sortOrder)
    {
        $this->$language;
        $this->$customerGroup;
        $this->$type;
        $this->$value;
        $this->$location;
        $this->$status;
        $this->$sortOrder;
    }


}
