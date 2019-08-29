<?php

namespace Yna\Cellact\Api;

class SendSms
{

    /**
     * @var Sms $SMS
     */
    protected $SMS = null;

    /**
     * @param Sms $SMS
     */
    public function __construct($SMS)
    {
        $this->SMS = $SMS;
    }

    /**
     * @return Sms
     */
    public function getSMS()
    {
        return $this->SMS;
    }

    /**
     * @param Sms $SMS
     * @return SendSms
     */
    public function setSMS($SMS)
    {
        $this->SMS = $SMS;

        return $this;
    }

}
