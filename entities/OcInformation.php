<?php


/**
 * OcInformation
 */
class OcInformation
{

    /**
     * @var integer
     */
    private $bottom = '0';

    /**
     * @var integer
     */
    private $sortOrder = '0';

    /**
     * @var boolean
     */
    private $status = '1';

    /**
     * @var integer
     */
    private $informationId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $store;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    public function __construct(Doctrine\Common\Collections\Collection $store, Doctrine\Common\Collections\Collection $language, $bottom, $sortOrder, $status)
    {
        $this->store = $store;
        $this->language = $language;
        $this->bottom = $bottom;
        $this->sortOrder = $sortOrder;
        $this->status = $status;
    }


}
