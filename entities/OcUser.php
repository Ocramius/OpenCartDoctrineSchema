<?php


/**
 * OcUser
 */
class OcUser
{

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $dateAdded;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var \OcUserGroup
     */
    private $userGroup;

    public function __construct(OcUserGroup $userGroup, $username, $password, $salt, $firstname, $lastname, $email, $image, $code, $ip, $status, DateTime $dateAdded)
    {
        $this->userGroup = $userGroup;
        $this->username = $username;
        $this->password = $password;
        $this->salt = $salt;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->image = $image;
        $this->code = $code;
        $this->ip = $ip;
        $this->status = $status;
        $this->dateAdded = $dateAdded;
    }


}
