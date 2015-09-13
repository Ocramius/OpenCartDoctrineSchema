<?php


/**
 * OcFilterDescription
 */
class OcFilterDescription
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var \OcLanguage
     */
    private $language;

    /**
     * @var \OcFilter
     */
    private $filter;

    /**
     * @var \OcFilterGroup
     */
    private $filterGroup;

    public function __construct(OcLanguage $language, OcFilter $filter, OcFilterGroup $filterGroup, $name)
    {
        $this->$language;
        $this->$filter;
        $this->$filterGroup;
        $this->$name;
    }


}
