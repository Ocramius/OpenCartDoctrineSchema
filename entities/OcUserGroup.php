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

    public function __construct($name, $permission)
    {
        $this->name = $name;
        $this->permission = $permission;
    }


}
