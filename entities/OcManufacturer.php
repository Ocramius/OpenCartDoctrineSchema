<?php


/**
 * OcManufacturer
 */
class OcManufacturer
{

    /**
     * @var string
     */
    private $name;

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
    private $manufacturerId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $store;

    public function __construct(Doctrine\Common\Collections\Collection $store, $name, $sortOrder, $image = null)
    {
        $this->$store;
        $this->$name;
        $this->$sortOrder;
        $this->$image;
    }


}
