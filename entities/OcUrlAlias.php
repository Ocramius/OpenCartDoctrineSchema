<?php


/**
 * OcUrlAlias
 */
class OcUrlAlias
{

    /**
     * @var string
     */
    private $query;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var integer
     */
    private $urlAliasId;

    public function __construct($query, $keyword)
    {
        $this->query = $query;
        $this->keyword = $keyword;
    }


}
