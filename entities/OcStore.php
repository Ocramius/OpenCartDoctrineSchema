<?php


/**
 * OcStore
 */
class OcStore
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $ssl;

    /**
     * @var integer
     */
    private $storeId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $manufacturer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $information;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $category;

    public function __construct(Doctrine\Common\Collections\Collection $product, Doctrine\Common\Collections\Collection $manufacturer, Doctrine\Common\Collections\Collection $information, Doctrine\Common\Collections\Collection $category, $name, $url, $ssl)
    {
        $this->product = $product;
        $this->manufacturer = $manufacturer;
        $this->information = $information;
        $this->category = $category;
        $this->name = $name;
        $this->url = $url;
        $this->ssl = $ssl;
    }


}
