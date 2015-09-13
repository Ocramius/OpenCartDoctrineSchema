<?php


/**
 * OcProductAttribute
 */
class OcProductAttribute
{

    /**
     * @var string
     */
    private $text;

    /**
     * @var \OcAttribute
     */
    private $attribute;

    /**
     * @var \OcLanguage
     */
    private $language;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcAttribute $attribute, OcLanguage $language, OcProduct $product, $text)
    {
        $this->attribute = $attribute;
        $this->language = $language;
        $this->product = $product;
        $this->text = $text;
    }


}
