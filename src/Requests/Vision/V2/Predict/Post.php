<?php

declare(strict_types=1);

namespace RestbSDK\Requests\Vision\V2\Predict;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'image_base64',
        'model_id',
    ];

    /**
     * URL-safe base64 of the image (the public samples mark this for development only)
     */
    public string $image_base64;
    /**
     * Comma-separated list of models for multipredict (the public SDK samples use re_roomtype_global_v2, re_exterior_styles, re_features_v4, re_logo, re_compliance_v2, re_condition_r1r6_global)
     */
    public string $model_id;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'image_base64' => is_string($value) ? $this->image_base64 = $value : parent::assignMember($name, $value),
            'model_id' => is_string($value) ? $this->model_id = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
