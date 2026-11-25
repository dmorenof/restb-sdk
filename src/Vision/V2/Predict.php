<?php

declare(strict_types=1);

namespace RestbSDK\Vision\V2;

final class Predict extends \RestbSDK\RestbAiVisionAPISDK
{
    /** GET /vision/v2/predict [operationId: predictByUrl] */
    /**
     * Run one model on an image (image by URL)
     */
    public static function get(\RestbSDK\GetParams\Vision\V2\Predict $params): \RestbSDK\Responses\Vision\V2\Predict\PredictMapResponse
    {
        return self::client()->resource(\RestbSDK\Resources\Vision\V2\Predict::class)->get($params);
    }

    /** POST /vision/v2/predict [operationId: predictByImage] */
    /**
     * Run one model on an image (image as base64 in the body)
     */
    public static function post(\RestbSDK\PostParams\Vision\V2\Predict $params): \RestbSDK\Responses\Vision\V2\Predict\PostMap\PredictMapResponse
    {
        return self::client()->resource(\RestbSDK\Resources\Vision\V2\Predict::class)->post($params);
    }
}
