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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->option = new \Doctrine\Common\Collections\ArrayCollection();
        $this->lengthClass = new \Doctrine\Common\Collections\ArrayCollection();
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recurring = new \Doctrine\Common\Collections\ArrayCollection();
        $this->weightClass = new \Doctrine\Common\Collections\ArrayCollection();
        $this->voucherTheme = new \Doctrine\Common\Collections\ArrayCollection();
        $this->information = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filterGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attributeGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customField = new \Doctrine\Common\Collections\ArrayCollection();
        $this->customerGroup = new \Doctrine\Common\Collections\ArrayCollection();
        $this->download = new \Doctrine\Common\Collections\ArrayCollection();
        $this->attribute = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

