<?php

namespace Yna\Cellact\Api;

class Sms
{

    /**
     * @var string $Message
     */
    protected $Message = null;

    /**
     * @var ArrayOfString $RecipientGroups
     */
    protected $RecipientGroups = null;

    /**
     * @var ArrayOfString $RecipientPhones
     */
    protected $RecipientPhones = null;

    /**
     * @var int $TTL
     */
    protected $TTL = null;

    /**
     * @var RateType $RateType
     */
    protected $RateType = null;

    /**
     * @var SystemRate $SystemRate
     */
    protected $SystemRate = null;

    /**
     * @var int $SpecificRate
     */
    protected $SpecificRate = null;

    /**
     * @var boolean $UseDefaultCallback
     */
    protected $UseDefaultCallback = null;

    /**
     * @var string $Callback
     */
    protected $Callback = null;

    /**
     * @var boolean $UseDefaultSignature
     */
    protected $UseDefaultSignature = null;

    /**
     * @var string $Signature
     */
    protected $Signature = null;

    /**
     * @var boolean $IsWap
     */
    protected $IsWap = null;

    /**
     * @var string $Waplink
     */
    protected $Waplink = null;

    /**
     * @var string $PostConfirmation
     */
    protected $PostConfirmation = null;

    /**
     * @var int $TTS
     */
    protected $TTS = null;

    /**
     * @param int $TTL
     * @param RateType $RateType
     * @param SystemRate $SystemRate
     * @param int $SpecificRate
     * @param boolean $UseDefaultCallback
     * @param boolean $UseDefaultSignature
     * @param boolean $IsWap
     * @param int $TTS
     */
    public function __construct($TTL, $RateType, $SystemRate, $SpecificRate, $UseDefaultCallback, $UseDefaultSignature, $IsWap, $TTS)
    {
        $this->TTL = $TTL;
        $this->RateType = $RateType;
        $this->SystemRate = $SystemRate;
        $this->SpecificRate = $SpecificRate;
        $this->UseDefaultCallback = $UseDefaultCallback;
        $this->UseDefaultSignature = $UseDefaultSignature;
        $this->IsWap = $IsWap;
        $this->TTS = $TTS;
        $this->PostConfirmation = "";
        $this->Waplink = "";
        $this->RecipientGroups = new ArrayOfString([]);
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @param string $Message
     * @return Sms
     */
    public function setMessage($Message)
    {
        $this->Message = $Message;

        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getRecipientGroups()
    {
        return $this->RecipientGroups;
    }

    /**
     * @param ArrayOfString $RecipientGroups
     * @return Sms
     */
    public function setRecipientGroups($RecipientGroups)
    {
        $this->RecipientGroups = $RecipientGroups;

        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getRecipientPhones()
    {
        return $this->RecipientPhones;
    }

    /**
     * @param ArrayOfString $RecipientPhones
     * @return Sms
     */
    public function setRecipientPhones($RecipientPhones)
    {
        $this->RecipientPhones = $RecipientPhones;

        return $this;
    }

    /**
     * @return int
     */
    public function getTTL()
    {
        return $this->TTL;
    }

    /**
     * @param int $TTL
     * @return Sms
     */
    public function setTTL($TTL)
    {
        $this->TTL = $TTL;

        return $this;
    }

    /**
     * @return RateType
     */
    public function getRateType()
    {
        return $this->RateType;
    }

    /**
     * @param RateType $RateType
     * @return Sms
     */
    public function setRateType($RateType)
    {
        $this->RateType = $RateType;

        return $this;
    }

    /**
     * @return SystemRate
     */
    public function getSystemRate()
    {
        return $this->SystemRate;
    }

    /**
     * @param SystemRate $SystemRate
     * @return Sms
     */
    public function setSystemRate($SystemRate)
    {
        $this->SystemRate = $SystemRate;

        return $this;
    }

    /**
     * @return int
     */
    public function getSpecificRate()
    {
        return $this->SpecificRate;
    }

    /**
     * @param int $SpecificRate
     * @return Sms
     */
    public function setSpecificRate($SpecificRate)
    {
        $this->SpecificRate = $SpecificRate;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDefaultCallback()
    {
        return $this->UseDefaultCallback;
    }

    /**
     * @param boolean $UseDefaultCallback
     * @return Sms
     */
    public function setUseDefaultCallback($UseDefaultCallback)
    {
        $this->UseDefaultCallback = $UseDefaultCallback;

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
     * @return Sms
     */
    public function setCallback($Callback)
    {
        $this->Callback = $Callback;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDefaultSignature()
    {
        return $this->UseDefaultSignature;
    }

    /**
     * @param boolean $UseDefaultSignature
     * @return Sms
     */
    public function setUseDefaultSignature($UseDefaultSignature)
    {
        $this->UseDefaultSignature = $UseDefaultSignature;

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
     * @return Sms
     */
    public function setSignature($Signature)
    {
        $this->Signature = $Signature;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsWap()
    {
        return $this->IsWap;
    }

    /**
     * @param boolean $IsWap
     * @return Sms
     */
    public function setIsWap($IsWap)
    {
        $this->IsWap = $IsWap;

        return $this;
    }

    /**
     * @return string
     */
    public function getWaplink()
    {
        return $this->Waplink;
    }

    /**
     * @param string $Waplink
     * @return Sms
     */
    public function setWaplink($Waplink)
    {
        $this->Waplink = $Waplink;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostConfirmation()
    {
        return $this->PostConfirmation;
    }

    /**
     * @param string $PostConfirmation
     * @return Sms
     */
    public function setPostConfirmation($PostConfirmation)
    {
        $this->PostConfirmation = $PostConfirmation;

        return $this;
    }

    /**
     * @return int
     */
    public function getTTS()
    {
        return $this->TTS;
    }

    /**
     * @param int $TTS
     * @return Sms
     */
    public function setTTS($TTS)
    {
        $this->TTS = $TTS;

        return $this;
    }

}
