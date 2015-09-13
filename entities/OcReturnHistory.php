<?php


/**
 * OcReturnHistory
 */
class OcReturnHistory
{

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
     * @var \OcReturnStatus
     */
    private $returnStatus;

    /**
     * @var \OcReturn
     */
    private $return;

    public function __construct(OcReturnStatus $returnStatus, OcReturn $return, $notify, $comment, DateTime $dateAdded)
    {
        $this->$returnStatus;
        $this->$return;
        $this->$notify;
        $this->$comment;
        $this->$dateAdded;
    }


}
