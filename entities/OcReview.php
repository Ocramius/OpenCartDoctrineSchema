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


}

