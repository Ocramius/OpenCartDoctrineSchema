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


    /**
     * Set query
     *
     * @param string $query
     *
     * @return OcUrlAlias
     */
    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set keyword
     *
     * @param string $keyword
     *
     * @return OcUrlAlias
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Get keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Get urlAliasId
     *
     * @return integer
     */
    public function getUrlAliasId()
    {
        return $this->urlAliasId;
    }
}

