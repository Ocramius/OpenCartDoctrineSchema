<?php



/**
 * OcUserGroup
 */
class OcUserGroup
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $permission;

    /**
     * @var integer
     */
    private $userGroupId;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return OcUserGroup
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set permission
     *
     * @param string $permission
     *
     * @return OcUserGroup
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Get userGroupId
     *
     * @return integer
     */
    public function getUserGroupId()
    {
        return $this->userGroupId;
    }
}

