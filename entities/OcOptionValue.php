<?php



/**
 * OcOptionValue
 */
class OcOptionValue
{
    /**
     * @var integer
     */
    private $optionId;

    /**
     * @var string
     */
    private $image;

    /**
     * @var integer
     */
    private $sortOrder;

    /**
     * @var integer
     */
    private $optionValueId;


    /**
     * Set optionId
     *
     * @param integer $optionId
     *
     * @return OcOptionValue
     */
    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;

        return $this;
    }

    /**
     * Get optionId
     *
     * @return integer
     */
    public function getOptionId()
    {
        return $this->optionId;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return OcOptionValue
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return OcOptionValue
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
     * Get optionValueId
     *
     * @return integer
     */
    public function getOptionValueId()
    {
        return $this->optionValueId;
    }
}

