<?php

namespace Yna\Cellact;

use Illuminate\Notifications\Notification;
use Yna\Cellact\Api\Api;
use Yna\Cellact\Api\ArrayOfString;
use Yna\Cellact\Api\RateType;
use Yna\Cellact\Api\SendSms;
use Yna\Cellact\Api\Sms;
use Yna\Cellact\Api\SystemRate;
use Yna\Cellact\Exceptions\CouldNotSendNotification;

class CellactChannel
{
    /** @var Api */
    protected $api;

    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * Send the given notification.
     *
     * @param  mixed $notifiable
     * @param  \Illuminate\Notifications\Notification $notification
     *
     * @throws  CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        $to = $notifiable->routeNotificationFor('cellact');

        if (empty($to)) {
            throw CouldNotSendNotification::missingRecipient();
        }

        $message = $notification->toCellact($notifiable);

        if (is_string($message)) {
            $message = new CellactMessage($message);
        }

        $this->sendMessage($to, $message);
    }

    protected function sendMessage($recipient, CellactMessage $message)
    {
        if (mb_strlen($message->content) > 800) {
            throw CouldNotSendNotification::contentLengthLimitExceeded();
        }

        $params = [
            'to' => $recipient,
            'body' => $message->content
        ];

        $ttl = config('services.cellact.ttl', 30);
        $rateType = config('services.cellact.rateType', RateType::Default);
        $systemRate = config('services.cellact.systemRate', SystemRate::__default);
        $specificRate = config('services.cellact.specificRate', 0);
        $useDefaultCallback = config('services.cellact.useDefaultCallback', false);
        $useDefaultSignature = config('services.cellact.useDefaultSignature', true);
        $isWap = config('services.cellact.isWap', false);
        $tts = config('services.cellact.tts', 0);
        $from = config('services.cellact.from', '');

        $sms = new Sms(
            $ttl,
            $rateType,
            $systemRate,
            $specificRate,
            $useDefaultCallback,
            $useDefaultSignature,
            $isWap,
            $tts
        );

        $sms->setMessage($params['body']);
        $sms->setRecipientPhones(
            new ArrayOfString([$params['to']])
        );

        if (! empty($message->from)) {
            $sms->setCallback($message->from);
        }

        else {
            $sms->setCallback($from);
        }

        $this->api->SendSMS(new SendSms($sms));
    }
}
