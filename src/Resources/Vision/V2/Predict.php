<?php

declare(strict_types=1);

namespace RestbSDK\Resources\Vision\V2;

final class Predict extends \RestbSDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/vision/v2/predict',
        'responseType' => '\\RestbSDK\\Responses\\Vision\\V2\\Predict\\PredictMapResponse',
    ];

    /**
     * Run one model on an image (image by URL)
     */
    public function get(\RestbSDK\GetParams\Vision\V2\Predict $params): \RestbSDK\Responses\Vision\V2\Predict\PredictMapResponse
    {
        /** @var \RestbSDK\Responses\Vision\V2\Predict\PredictMapResponse $result */
        $result = $this->executeArguments(self::operation(self::GET), parameters: $params);
        return $result;
    }

    private const array POST = [
        'method' => 'POST',
        'path' => '/vision/v2/predict',
        'responseType' => '\\RestbSDK\\Responses\\Vision\\V2\\Predict\\PostMap\\PredictMapResponse',
        'requestMediaType' => 'application/x-www-form-urlencoded',
    ];

    /**
     * Run one model on an image (image as base64 in the body)
     */
    public function post(\RestbSDK\PostParams\Vision\V2\Predict $params): \RestbSDK\Responses\Vision\V2\Predict\PostMap\PredictMapResponse
    {
        /** @var \RestbSDK\Responses\Vision\V2\Predict\PostMap\PredictMapResponse $result */
        $result = $this->executeArguments(self::operation(self::POST), parameters: $params);
        return $result;
    }

}
