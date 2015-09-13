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
    private $categoryId;

    /**
     * @var integer
     */
    private $pathId;


    /**
     * Set level
     *
     * @param integer $level
     *
     * @return OcCategoryPath
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     *
     * @return OcCategoryPath
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set pathId
     *
     * @param integer $pathId
     *
     * @return OcCategoryPath
     */
    public function setPathId($pathId)
    {
        $this->pathId = $pathId;

        return $this;
    }

    /**
     * Get pathId
     *
     * @return integer
     */
    public function getPathId()
    {
        return $this->pathId;
    }
}

