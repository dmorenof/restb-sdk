<?php

declare(strict_types=1);

namespace RestbSDK\Vision\V2;

final class Multipredict extends \RestbSDK\RestbAiVisionAPISDK
{
    /** GET /vision/v2/multipredict [operationId: multipredictByUrl] */
    /**
     * Run several models on an image (image by URL)
     */
    public static function get(\RestbSDK\GetParams\Vision\V2\Multipredict $params): \RestbSDK\Responses\Vision\V2\Multipredict\MultipredictMapResponse
    {
        return self::client()->resource(\RestbSDK\Resources\Vision\V2\Multipredict::class)->get($params);
    }

    /** POST /vision/v2/multipredict [operationId: multipredictByImage] */
    /**
     * Run several models on an image (image as base64 in the body)
     */
    public static function post(\RestbSDK\PostParams\Vision\V2\Multipredict $params): \RestbSDK\Responses\Vision\V2\Multipredict\PostMap\MultipredictMapResponse
    {
        return self::client()->resource(\RestbSDK\Resources\Vision\V2\Multipredict::class)->post($params);
    }

}
