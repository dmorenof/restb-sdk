<?php

declare(strict_types=1);

namespace RestbSDK\PostParams\Vision\V2;

final class Multipredict extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'client_key',
    'body',
];
    public const array OPERATION_FIELDS = [
    'path' => [],
    'query' => [
        'client_key' => 'client_key',
    ],
    'header' => [],
];

    public const bool OPERATION_BODY = true;

    public string $client_key;
    public \RestbSDK\Requests\Vision\V2\Multipredict\Post $body;
}
