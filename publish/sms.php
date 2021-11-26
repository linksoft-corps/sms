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
    ],
    'access' => [
        'driver' => LinkSoft\Sms\Adapter\SmsAccess::class,
    ],
    'link' => [
        'driver' => LinkSoft\Sms\Adapter\SmsLink::class,
    ],
    '253' => [
        'driver' => LinkSoft\Sms\Adapter\Sms253::class,
    ]
];
