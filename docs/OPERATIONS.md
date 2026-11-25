# Restb.ai SDK for PHP: operations

4 operations. Each is a static method of a facade class (`RestbSDK\...`); configure the SDK once with `RestbAiVisionAPISDK::configure()`, then call them. The same operations are available on a connection object: `Client::connect($configuration)->resource(ResourceClass::class)`.

| Operation | HTTP | Path | Call |
| --- | --- | --- | --- |
| Run several models on an image (image by URL) | GET | `/vision/v2/multipredict` | `Vision\V2\Multipredict::get()` |
| Run several models on an image (image as base64 in the body) | POST | `/vision/v2/multipredict` | `Vision\V2\Multipredict::post()` |
| Run one model on an image (image by URL) | GET | `/vision/v2/predict` | `Vision\V2\Predict::get()` |
| Run one model on an image (image as base64 in the body) | POST | `/vision/v2/predict` | `Vision\V2\Predict::post()` |
