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

    public function __construct(Doctrine\Common\Collections\Collection $language, $type, $sortOrder)
    {
        $this->$language;
        $this->$type;
        $this->$sortOrder;
    }


}
