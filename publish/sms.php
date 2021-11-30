<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

return [
    'default' => [
        'driver' => LinkSoft\Sms\Adapter\SmsDev::class,
    ],
    'aliyun' => [
        'driver' => LinkSoft\Sms\Adapter\SmsAliyun::class,
        'api' => '',
        'sign' => '',
        'accessId' => '',
        'templateId' => '',
        'regionId' => '',
    ],
    'access' => [
        'driver' => LinkSoft\Sms\Adapter\SmsAccess::class,
        'api' => '',
        'username' => '',
        'password' => ''
    ],
    'link' => [
        'driver' => LinkSoft\Sms\Adapter\SmsLink::class,
        'api' => '',
        'username' => '',
        'password' => '',
        'code' => '',
        'sign' => '',
    ],
    '253' => [
        'driver' => LinkSoft\Sms\Adapter\Sms253::class,
        'api' => '',
        'username' => '',
        'password' => ''
    ]
];
