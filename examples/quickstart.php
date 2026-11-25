<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use RestbSDK\Configuration;
use RestbSDK\RestbAiVisionAPISDK;
use RestbSDK\GetParams\Vision\V2\Multipredict as MultipredictParams;
use RestbSDK\Vision\V2\Multipredict;

RestbAiVisionAPISDK::configure(new Configuration()); // https://api-us.restb.ai by default

$result = Multipredict::get(new MultipredictParams((object) [
    'client_key' => getenv('RESTB_CLIENT_KEY') ?: '',
    'model_id' => 're_roomtype_global_v2,re_features_v4',
    'image_url' => 'https://demo.restb.ai/images/demo/demo-1.jpg',
]));

echo json_encode($result), "\n";
