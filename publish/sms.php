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
        'api' => env('SMS_DEV_CHANNEL_API'),
    ],
    'access' => [
        'driver' => LinkSoft\Sms\Adapter\SmsAccess::class,
        'api' => env('SMS_ACCESS_CHANNEL_API'),
        'username' => env('SMS_ACCESS_CHANNEL_USER'),
        'password' => env('SMS_ACCESS_CHANNEL_PASS')
    ],
    'link' => [
        'driver' => LinkSoft\Sms\Adapter\SmsLink::class,
        'api' => env('SMS_LINK_CHANNEL_API'),
        'username' => env('SMS_LINK_CHANNEL_USER'),
        'password' => env('SMS_LINK_CHANNEL_PASS'),
        'code' => env('SMS_LINK_CHANNEL_CODE'),
        'sign' => env('SMS_LINK_CHANNEL_SIGN'),
    ],
    '253' => [
        'driver' => LinkSoft\Sms\Adapter\Sms253::class,
        'api' => env('SMS_253_CHANNEL_API'),
        'username' => env('SMS_253_CHANNEL_USER'),
        'password' => env('SMS_253_CHANNEL_PASS')
    ]
];
