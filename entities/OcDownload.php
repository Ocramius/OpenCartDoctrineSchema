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

    public function __construct(Doctrine\Common\Collections\Collection $product, Doctrine\Common\Collections\Collection $language, $filename, $mask, DateTime $dateAdded)
    {
        $this->$product;
        $this->$language;
        $this->$filename;
        $this->$mask;
        $this->$dateAdded;
    }


}
