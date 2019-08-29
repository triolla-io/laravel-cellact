<?php

namespace Yna\Cellact\Api;

class Credential
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $Company
     */
    protected $Company = null;


    public function __construct($username, $password, $company)
    {
        $this->Username = $username;
        $this->Password = $password;
        $this->Company = $company;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * @param string $Username
     * @return Credential
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return Credential
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return Credential
     */
    public function setCompany($Company)
    {
        $this->Company = $Company;

        return $this;
    }

}
