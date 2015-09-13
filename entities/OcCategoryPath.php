<?php


/**
 * OcCategoryPath
 */
class OcCategoryPath
{

    /**
     * @var integer
     */
    private $level;

    /**
     * @var integer
     */
    private $pathId;

    /**
     * @var \OcCategory
     */
    private $category;

    public function __construct(OcCategory $category, $level, $pathId)
    {
        $this->category = $category;
        $this->level = $level;
        $this->pathId = $pathId;
    }


}
