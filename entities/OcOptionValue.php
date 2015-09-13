<?php


/**
 * OcOptionValue
 */
class OcOptionValue
{

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $optionValueId;

    /**
     * @var \OcOption
     */
    private $option;

    public function __construct(OcOption $option, $image, $sortOrder)
    {
        $this->option = $option;
        $this->image = $image;
        $this->sortOrder = $sortOrder;
    }


}
