<?php


/**
 * OcUpload
 */
class OcUpload
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $code;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $uploadId;

    public function __construct($name, $filename, $code, DateTime $dateAdded)
    {
        $this->name = $name;
        $this->filename = $filename;
        $this->code = $code;
        $this->dateAdded = $dateAdded;
    }


}
