<?php



/**
 * OcLayoutRoute
 */
class OcLayoutRoute
{
    /**
     * @var integer
     */
    private $layoutId;

    /**
     * @var integer
     */
    private $storeId;

    /**
     * @var string
     */
    private $route;

    /**
     * @var integer
     */
    private $layoutRouteId;


    /**
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return OcLayoutRoute
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    /**
     * Get layoutId
     *
     * @return integer
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * Set storeId
     *
     * @param integer $storeId
     *
     * @return OcLayoutRoute
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;

        return $this;
    }

    /**
     * Get storeId
     *
     * @return integer
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set route
     *
     * @param string $route
     *
     * @return OcLayoutRoute
     */
    public function setRoute($route)
    {
        $this->route = $route;

        return $this;
    }

    /**
     * Get route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Get layoutRouteId
     *
     * @return integer
     */
    public function getLayoutRouteId()
    {
        return $this->layoutRouteId;
    }
}

