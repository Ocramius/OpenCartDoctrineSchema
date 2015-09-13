<?php


/**
 * OcReview
 */
class OcReview
{

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $text;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var boolean
     */
    private $status = '0';

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var integer
     */
    private $reviewId;

    /**
     * @var \OcCustomer
     */
    private $customer;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcCustomer $customer, OcProduct $product, $author, $text, $rating, $status, DateTime $dateAdded, DateTime $dateModified)
    {
        $this->customer = $customer;
        $this->product = $product;
        $this->author = $author;
        $this->text = $text;
        $this->rating = $rating;
        $this->status = $status;
        $this->dateAdded = $dateAdded;
        $this->dateModified = $dateModified;
    }


}
