<?php



/**
 * OcDownload
 */
class OcDownload
{
    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $mask;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $downloadId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $product;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $language;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new \Doctrine\Common\Collections\ArrayCollection();
        $this->language = new \Doctrine\Common\Collections\ArrayCollection();
    }

}

