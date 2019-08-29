<?php

namespace Yna\Cellact\Api;

class User
{

    /**
     * @var TypeOfUser $UserType
     */
    protected $UserType = null;

    /**
     * @var string $PhoneNumber
     */
    protected $PhoneNumber = null;

    /**
     * @var string $Signature
     */
    protected $Signature = null;

    /**
     * @var string $Callback
     */
    protected $Callback = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @param TypeOfUser $UserType
     */
    public function __construct($UserType)
    {
        $this->UserType = $UserType;
    }

    /**
     * @return TypeOfUser
     */
    public function getUserType()
    {
        return $this->UserType;
    }

    /**
     * @param TypeOfUser $UserType
     * @return User
     */
    public function setUserType($UserType)
    {
        $this->UserType = $UserType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }

    /**
     * @param string $PhoneNumber
     * @return User
     */
    public function setPhoneNumber($PhoneNumber)
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * @param string $Signature
     * @return User
     */
    public function setSignature($Signature)
    {
        $this->Signature = $Signature;

        return $this;
    }

    /**
     * @return string
     */
    public function getCallback()
    {
        return $this->Callback;
    }

    /**
     * @param string $Callback
     * @return User
     */
    public function setCallback($Callback)
    {
        $this->Callback = $Callback;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return User
     */
    public function setFirstName($FirstName)
    {
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return User
     */
    public function setLastName($LastName)
    {
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return User
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

}
