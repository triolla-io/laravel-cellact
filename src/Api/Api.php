<?php

namespace Yna\Cellact\Api;

use Doctrine\DBAL\Driver\AbstractDB2Driver;

class Api extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = [
        'meWSSMS'              => Sms::class,
        'SendSMS'              => SendSms::class,
        'SendSMSResponse'      => SendSmsResponse::class,
        'meWSSendResult'       => SendResult::class,
        'Authenticate'         => Authenticate::class,
        'AuthenticateResponse' => AuthenticateResponse::class,
        'WSCredential'         => Credential::class,
    ];

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = [], $wsdl = null)
    {
        if (!isset($options['classmap'])) {
            $options['classmap'] = [];
        }

        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        $options = array_merge([
            'features'     => SOAP_SINGLE_ELEMENT_ARRAYS,
            'exceptions'   => true,
            'trace'        => 1,
            'soap_version' => SOAP_1_2,
        ], $options);

        if (!$wsdl) {
            $wsdl = 'https://cellactpro.net/mewsext/wssend.asmx?WSDL';
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @return Api
     */
    public static function create($config)
    {
        $inst = new static();

        $inst->__setSoapHeaders(
            new \SoapHeader('http://cellact.com/', 'WSCredential', new Credential(
                $config['user'],
                $config['password'],
                $config['company']
            ), false)
        );

        return $inst;
    }

    /**
     * Send SMS
     *
     * @param SendSMS $parameters
     * @return SendSmsResponse
     */
    public function SendSMS(SendSMS $parameters)
    {
        return $this->__soapCall('SendSMS', [$parameters]);
    }

}
