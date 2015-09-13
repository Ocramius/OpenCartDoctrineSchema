<?php



/**
 * OcLayout
 */
class OcLayout
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $layoutId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcLayout
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
}

