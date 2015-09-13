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
        $this->language = $language;
        $this->optionValue = $optionValue;
        $this->option = $option;
        $this->name = $name;
    }


}
