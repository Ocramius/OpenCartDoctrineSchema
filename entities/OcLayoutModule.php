<?php


/**
 * OcLayoutModule
 */
class OcLayoutModule
{

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
     * @var \OcLayout
     */
    private $layout;

    public function __construct(OcLayout $layout, $code, $position, $sortOrder)
    {
        $this->layout = $layout;
        $this->code = $code;
        $this->position = $position;
        $this->sortOrder = $sortOrder;
    }


}
