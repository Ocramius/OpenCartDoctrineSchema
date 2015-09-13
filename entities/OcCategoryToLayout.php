<?php


/**
 * OcCategoryToLayout
 */
class OcCategoryToLayout
{

    /**
     * @var \OcCategory
     */
    private $category;

    /**
     * @var \OcStore
     */
    private $store;

    /**
     * @var \OcLayout
     */
    private $layout;

    public function __construct(OcCategory $category, OcStore $store, OcLayout $layout)
    {
        $this->category = $category;
        $this->store = $store;
        $this->layout = $layout;
    }


}
