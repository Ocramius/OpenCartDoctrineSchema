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

    public function __construct(Doctrine\Common\Collections\Collection $language, $value)
    {
        $this->language = $language;
        $this->value = $value;
    }


}
