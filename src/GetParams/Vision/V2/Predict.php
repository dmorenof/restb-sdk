<?php

declare(strict_types=1);

namespace RestbSDK\GetParams\Vision\V2;

final class Predict extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'client_key',
        'image_url',
        'model_id',
    ];
    public const array OPERATION_FIELDS = [
        'path' => [],
        'query' => [
            'client_key' => 'client_key',
            'image_url' => 'image_url',
            'model_id' => 'model_id',
        ],
        'header' => [],
    ];

    public string $client_key;
    public string $image_url;
    public string $model_id;
}
