<?php


/**
 * OcLanguage
 */
class OcLanguage
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $directory;

    /**
     * @var integer
     */
    private $sortOrder = '0';

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var integer
     */
    private $languageId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $option;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $lengthClass;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $recurring;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $weightClass;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $voucherTheme;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $information;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $filterGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attributeGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customField;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $customerGroup;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $download;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $attribute;

    public function __construct(Doctrine\Common\Collections\Collection $option, Doctrine\Common\Collections\Collection $lengthClass, Doctrine\Common\Collections\Collection $product, Doctrine\Common\Collections\Collection $recurring, Doctrine\Common\Collections\Collection $weightClass, Doctrine\Common\Collections\Collection $voucherTheme, Doctrine\Common\Collections\Collection $information, Doctrine\Common\Collections\Collection $filterGroup, Doctrine\Common\Collections\Collection $category, Doctrine\Common\Collections\Collection $attributeGroup, Doctrine\Common\Collections\Collection $customField, Doctrine\Common\Collections\Collection $customerGroup, Doctrine\Common\Collections\Collection $download, Doctrine\Common\Collections\Collection $attribute, $name, $code, $locale, $image, $directory, $sortOrder, $status)
    {
        $this->$option;
        $this->$lengthClass;
        $this->$product;
        $this->$recurring;
        $this->$weightClass;
        $this->$voucherTheme;
        $this->$information;
        $this->$filterGroup;
        $this->$category;
        $this->$attributeGroup;
        $this->$customField;
        $this->$customerGroup;
        $this->$download;
        $this->$attribute;
        $this->$name;
        $this->$code;
        $this->$locale;
        $this->$image;
        $this->$directory;
        $this->$sortOrder;
        $this->$status;
    }


}
