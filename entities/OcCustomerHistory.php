<?php



/**
 * OcCustomerHistory
 */
class OcCustomerHistory
{
    /**
     * @var integer
     */
    private $customerId;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $customerHistoryId;


    /**
     * Set customerId
     *
     * @param integer $customerId
     *
     * @return OcCustomerHistory
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return integer
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return OcCustomerHistory
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     *
     * @return OcCustomerHistory
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Get customerHistoryId
     *
     * @return integer
     */
    public function getCustomerHistoryId()
    {
        return $this->customerHistoryId;
    }
}

