<?php


/**
 * OcFilterGroup
 */
class OcFilterGroup
{

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $filterGroupId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    public function __construct(Doctrine\Common\Collections\Collection $language, $sortOrder)
    {
        $this->$language;
        $this->$sortOrder;
    }


}
