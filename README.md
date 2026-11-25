# Restb.ai SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/restb-sdk.svg)](https://packagist.org/packages/dmorenof/restb-sdk)

**Run Restb.ai real-estate computer vision models on property photos from PHP.**

Send a photo by URL or as base64 and get the predictions of one or several Restb.ai models (room type, features, condition, compliance...) with the US or EU endpoint.

> Unofficial. Not affiliated with, endorsed by or supported by Restb.ai. See [NOTICE.md](NOTICE.md).

## Why this SDK

- `predict` and `multipredict`, by URL (GET) or by image (POST).
- US and EU hosts: set the one you contracted.
- Small and dependency-light.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/restb.json` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 4 operations and 6 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/restb-sdk
```

## Quick start

```php
<?php
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
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

4 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `vision` | 4 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- Restb.ai keeps its documentation behind a client login: this contract is deliberately small and its answers are free-form JSON (see NOTICE.md).
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://docs.restb.ai/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
