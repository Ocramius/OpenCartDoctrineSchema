<?php


/**
 * OcOptionValueDescription
 */
class OcOptionValueDescription
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var \OcLanguage
     */
    private $language;

    /**
     * @var \OcOptionValue
     */
    private $optionValue;

    /**
     * @var \OcOption
     */
    private $option;

    public function __construct(OcLanguage $language, OcOptionValue $optionValue, OcOption $option, $name)
    {
        $this->$language;
        $this->$optionValue;
        $this->$option;
        $this->$name;
    }


}
