<?php

namespace Yna\Cellact\Api;

class SendResult
{

    /**
     * @var string $MessageID
     */
    protected $MessageID = null;

    /**
     * @var int $RecipientCount
     */
    protected $RecipientCount = null;

    /**
     * @param int $RecipientCount
     */
    public function __construct($RecipientCount)
    {
        $this->RecipientCount = $RecipientCount;
    }

    /**
     * @return string
     */
    public function getMessageID()
    {
        return $this->MessageID;
    }

    /**
     * @param string $MessageID
     * @return SendResult
     */
    public function setMessageID($MessageID)
    {
        $this->MessageID = $MessageID;

        return $this;
    }

    /**
     * @return int
     */
    public function getRecipientCount()
    {
        return $this->RecipientCount;
    }

    /**
     * @param int $RecipientCount
     * @return SendResult
     */
    public function setRecipientCount($RecipientCount)
    {
        $this->RecipientCount = $RecipientCount;

        return $this;
    }

}
