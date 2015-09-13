<?php


/**
 * OcInformationToLayout
 */
class OcInformationToLayout
{

    /**
     * @var \OcInformation
     */
    private $information;

    /**
     * @var \OcStore
     */
    private $store;

    /**
     * @var \OcLayout
     */
    private $layout;

    public function __construct(OcInformation $information, OcStore $store, OcLayout $layout)
    {
        $this->$information;
        $this->$store;
        $this->$layout;
    }


}
