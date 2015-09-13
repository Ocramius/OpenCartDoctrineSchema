<?php


/**
 * OcProductRecurring
 */
class OcProductRecurring
{

    /**
     * @var \OcCustomerGroup
     */
    private $customerGroup;

    /**
     * @var \OcRecurring
     */
    private $recurring;

    /**
     * @var \OcProduct
     */
    private $product;

    public function __construct(OcCustomerGroup $customerGroup, OcRecurring $recurring, OcProduct $product)
    {
        $this->customerGroup = $customerGroup;
        $this->recurring = $recurring;
        $this->product = $product;
    }


}
