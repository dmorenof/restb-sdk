<?php

declare(strict_types=1);

namespace RestbSDK\Resources\Vision\V2;

final class Multipredict extends \RestbSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/vision/v2/multipredict',
        'responseType' => '\\RestbSDK\\Responses\\Vision\\V2\\Multipredict\\MultipredictMapResponse',
    ];

    /**
     * Run several models on an image (image by URL)
     */
    public function get(\RestbSDK\GetParams\Vision\V2\Multipredict $params): \RestbSDK\Responses\Vision\V2\Multipredict\MultipredictMapResponse
    {
        /** @var \RestbSDK\Responses\Vision\V2\Multipredict\MultipredictMapResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/vision/v2/multipredict',
        'responseType' => '\\RestbSDK\\Responses\\Vision\\V2\\Multipredict\\PostMap\\MultipredictMapResponse',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Run several models on an image (image as base64 in the body)
     */
    public function post(\RestbSDK\PostParams\Vision\V2\Multipredict $params): \RestbSDK\Responses\Vision\V2\Multipredict\PostMap\MultipredictMapResponse
    {
        /** @var \RestbSDK\Responses\Vision\V2\Multipredict\PostMap\MultipredictMapResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }
}
