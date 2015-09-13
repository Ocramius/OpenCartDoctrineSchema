<?php


/**
 * OcLayoutRoute
 */
class OcLayoutRoute
{

    /**
     * @var string
     */
    private $route;

    /**
     * @var integer
     */
    private $layoutRouteId;

    /**
     * @var \OcStore
     */
    private $store;

    /**
     * @var \OcLayout
     */
    private $layout;

    public function __construct(OcStore $store, OcLayout $layout, $route)
    {
        $this->$store;
        $this->$layout;
        $this->$route;
    }


}
