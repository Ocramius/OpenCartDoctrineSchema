<?php



/**
 * OcLayoutModule
 */
class OcLayoutModule
{
    /**
     * @var integer
     */
    private $layoutId;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $position;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $layoutModuleId;


    /**
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return OcLayoutModule
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
     * Set code
     *
     * @param string $code
     *
     * @return OcLayoutModule
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return OcLayoutModule
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcLayoutModule
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Get layoutModuleId
     *
     * @return integer
     */
    public function getLayoutModuleId()
    {
        return $this->layoutModuleId;
    }
}

