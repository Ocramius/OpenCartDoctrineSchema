<?php



/**
 * OcReturnHistory
 */
class OcReturnHistory
{
    /**
     * @var integer
     */
    private $returnId;

    /**
     * @var integer
     */
    private $returnStatusId;

    /**
     * @var boolean
     */
    private $notify;

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
    private $returnHistoryId;


    /**
     * Set returnId
     *
     * @param integer $returnId
     *
     * @return OcReturnHistory
     */
    public function setReturnId($returnId)
    {
        $this->returnId = $returnId;

        return $this;
    }

    /**
     * Get returnId
     *
     * @return integer
     */
    public function getReturnId()
    {
        return $this->returnId;
    }

    /**
     * Set returnStatusId
     *
     * @param integer $returnStatusId
     *
     * @return OcReturnHistory
     */
    public function setReturnStatusId($returnStatusId)
    {
        $this->returnStatusId = $returnStatusId;

        return $this;
    }

    /**
     * Get returnStatusId
     *
     * @return integer
     */
    public function getReturnStatusId()
    {
        return $this->returnStatusId;
    }

    /**
     * Set notify
     *
     * @param boolean $notify
     *
     * @return OcReturnHistory
     */
    public function setNotify($notify)
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * Get notify
     *
     * @return boolean
     */
    public function getNotify()
    {
        return $this->notify;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return OcReturnHistory
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
     * @return OcReturnHistory
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
     * Get returnHistoryId
     *
     * @return integer
     */
    public function getReturnHistoryId()
    {
        return $this->returnHistoryId;
    }
}

