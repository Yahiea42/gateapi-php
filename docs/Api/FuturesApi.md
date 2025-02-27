# GateApi\FuturesApi

All URIs are relative to *https://api.gateio.ws/api/v4*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listFuturesContracts**](FuturesApi.md#listFuturesContracts) | **GET** /futures/{settle}/contracts | List all futures contracts
[**getFuturesContract**](FuturesApi.md#getFuturesContract) | **GET** /futures/{settle}/contracts/{contract} | Get a single contract
[**listFuturesOrderBook**](FuturesApi.md#listFuturesOrderBook) | **GET** /futures/{settle}/order_book | Futures order book
[**listFuturesTrades**](FuturesApi.md#listFuturesTrades) | **GET** /futures/{settle}/trades | Futures trading history
[**listFuturesCandlesticks**](FuturesApi.md#listFuturesCandlesticks) | **GET** /futures/{settle}/candlesticks | Get futures candlesticks
[**listFuturesPremiumIndex**](FuturesApi.md#listFuturesPremiumIndex) | **GET** /futures/{settle}/premium_index | Premium Index K-Line
[**listFuturesTickers**](FuturesApi.md#listFuturesTickers) | **GET** /futures/{settle}/tickers | List futures tickers
[**listFuturesFundingRateHistory**](FuturesApi.md#listFuturesFundingRateHistory) | **GET** /futures/{settle}/funding_rate | Funding rate history
[**listFuturesInsuranceLedger**](FuturesApi.md#listFuturesInsuranceLedger) | **GET** /futures/{settle}/insurance | Futures insurance balance history
[**listContractStats**](FuturesApi.md#listContractStats) | **GET** /futures/{settle}/contract_stats | Futures stats
[**getIndexConstituents**](FuturesApi.md#getIndexConstituents) | **GET** /futures/{settle}/index_constituents/{index} | Get index constituents
[**listLiquidatedOrders**](FuturesApi.md#listLiquidatedOrders) | **GET** /futures/{settle}/liq_orders | Retrieve liquidation history
[**listFuturesAccounts**](FuturesApi.md#listFuturesAccounts) | **GET** /futures/{settle}/accounts | Query futures account
[**listFuturesAccountBook**](FuturesApi.md#listFuturesAccountBook) | **GET** /futures/{settle}/account_book | Query account book
[**listPositions**](FuturesApi.md#listPositions) | **GET** /futures/{settle}/positions | List all positions of a user
[**getPosition**](FuturesApi.md#getPosition) | **GET** /futures/{settle}/positions/{contract} | Get single position
[**updatePositionMargin**](FuturesApi.md#updatePositionMargin) | **POST** /futures/{settle}/positions/{contract}/margin | Update position margin
[**updatePositionLeverage**](FuturesApi.md#updatePositionLeverage) | **POST** /futures/{settle}/positions/{contract}/leverage | Update position leverage
[**updatePositionRiskLimit**](FuturesApi.md#updatePositionRiskLimit) | **POST** /futures/{settle}/positions/{contract}/risk_limit | Update position risk limit
[**setDualMode**](FuturesApi.md#setDualMode) | **POST** /futures/{settle}/dual_mode | Enable or disable dual mode
[**getDualModePosition**](FuturesApi.md#getDualModePosition) | **GET** /futures/{settle}/dual_comp/positions/{contract} | Retrieve position detail in dual mode
[**updateDualModePositionMargin**](FuturesApi.md#updateDualModePositionMargin) | **POST** /futures/{settle}/dual_comp/positions/{contract}/margin | Update position margin in dual mode
[**updateDualModePositionLeverage**](FuturesApi.md#updateDualModePositionLeverage) | **POST** /futures/{settle}/dual_comp/positions/{contract}/leverage | Update position leverage in dual mode
[**updateDualModePositionRiskLimit**](FuturesApi.md#updateDualModePositionRiskLimit) | **POST** /futures/{settle}/dual_comp/positions/{contract}/risk_limit | Update position risk limit in dual mode
[**listFuturesOrders**](FuturesApi.md#listFuturesOrders) | **GET** /futures/{settle}/orders | List futures orders
[**createFuturesOrder**](FuturesApi.md#createFuturesOrder) | **POST** /futures/{settle}/orders | Create a futures order
[**cancelFuturesOrders**](FuturesApi.md#cancelFuturesOrders) | **DELETE** /futures/{settle}/orders | Cancel all &#x60;open&#x60; orders matched
[**createBatchFuturesOrder**](FuturesApi.md#createBatchFuturesOrder) | **POST** /futures/{settle}/batch_orders | Create a batch of futures orders
[**getFuturesOrder**](FuturesApi.md#getFuturesOrder) | **GET** /futures/{settle}/orders/{order_id} | Get a single order
[**amendFuturesOrder**](FuturesApi.md#amendFuturesOrder) | **PUT** /futures/{settle}/orders/{order_id} | Amend an order
[**cancelFuturesOrder**](FuturesApi.md#cancelFuturesOrder) | **DELETE** /futures/{settle}/orders/{order_id} | Cancel a single order
[**getMyTrades**](FuturesApi.md#getMyTrades) | **GET** /futures/{settle}/my_trades | List personal trading history
[**listPositionClose**](FuturesApi.md#listPositionClose) | **GET** /futures/{settle}/position_close | List position close history
[**listLiquidates**](FuturesApi.md#listLiquidates) | **GET** /futures/{settle}/liquidates | List liquidation history
[**countdownCancelAllFutures**](FuturesApi.md#countdownCancelAllFutures) | **POST** /futures/{settle}/countdown_cancel_all | Countdown cancel orders
[**listPriceTriggeredOrders**](FuturesApi.md#listPriceTriggeredOrders) | **GET** /futures/{settle}/price_orders | List all auto orders
[**createPriceTriggeredOrder**](FuturesApi.md#createPriceTriggeredOrder) | **POST** /futures/{settle}/price_orders | Create a price-triggered order
[**cancelPriceTriggeredOrderList**](FuturesApi.md#cancelPriceTriggeredOrderList) | **DELETE** /futures/{settle}/price_orders | Cancel all open orders
[**getPriceTriggeredOrder**](FuturesApi.md#getPriceTriggeredOrder) | **GET** /futures/{settle}/price_orders/{order_id} | Get a price-triggered order
[**cancelPriceTriggeredOrder**](FuturesApi.md#cancelPriceTriggeredOrder) | **DELETE** /futures/{settle}/price_orders/{order_id} | cancel a price-triggered order


## listFuturesContracts

> \GateApi\Model\Contract[] listFuturesContracts($settle)

List all futures contracts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settle = 'usdt'; // string | Settle currency

try {
    $result = $apiInstance->listFuturesContracts($settle);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |

### Return type

[**\GateApi\Model\Contract[]**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFuturesContract

> \GateApi\Model\Contract getFuturesContract($settle, $contract)

Get a single contract

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract

try {
    $result = $apiInstance->getFuturesContract($settle, $contract);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getFuturesContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\Contract**](../Model/Contract.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesOrderBook

> \GateApi\Model\FuturesOrderBook listFuturesOrderBook($settle, $contract, $interval, $limit, $with_id)

Futures order book

Bids will be sorted by price from high to low, while asks sorted reversely

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract
$associate_array['interval'] = '0'; // string | Order depth. 0 means no aggregation is applied. default to 0
$associate_array['limit'] = 10; // int | Maximum number of order depth data in asks or bids
$associate_array['with_id'] = false; // bool | Whether the order book update ID will be returned. This ID increases by 1 on every order book update

try {
    $result = $apiInstance->listFuturesOrderBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesOrderBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **interval** | **string**| Order depth. 0 means no aggregation is applied. default to 0 | [optional] [default to &#39;0&#39;]
 **limit** | **int**| Maximum number of order depth data in asks or bids | [optional] [default to 10]
 **with_id** | **bool**| Whether the order book update ID will be returned. This ID increases by 1 on every order book update | [optional] [default to false]

### Return type

[**\GateApi\Model\FuturesOrderBook**](../Model/FuturesOrderBook.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesTrades

> \GateApi\Model\FuturesTrade[] listFuturesTrades($settle, $contract, $limit, $offset, $last_id, $from, $to)

Futures trading history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['last_id'] = '12345'; // string | Specify the starting point for this list based on a previously retrieved id  This parameter is deprecated. Use `from` and `to` instead to limit time range
$associate_array['from'] = 1546905600; // int | Specify starting time in Unix seconds. If not specified, `to` and `limit` will be used to limit response items. If items between `from` and `to` are more than `limit`, only `limit` number will be returned.
$associate_array['to'] = 1546935600; // int | Specify end time in Unix seconds, default to current time

try {
    $result = $apiInstance->listFuturesTrades($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **last_id** | **string**| Specify the starting point for this list based on a previously retrieved id  This parameter is deprecated. Use &#x60;from&#x60; and &#x60;to&#x60; instead to limit time range | [optional]
 **from** | **int**| Specify starting time in Unix seconds. If not specified, &#x60;to&#x60; and &#x60;limit&#x60; will be used to limit response items. If items between &#x60;from&#x60; and &#x60;to&#x60; are more than &#x60;limit&#x60;, only &#x60;limit&#x60; number will be returned. | [optional]
 **to** | **int**| Specify end time in Unix seconds, default to current time | [optional]

### Return type

[**\GateApi\Model\FuturesTrade[]**](../Model/FuturesTrade.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesCandlesticks

> \GateApi\Model\FuturesCandlestick[] listFuturesCandlesticks($settle, $contract, $from, $to, $limit, $interval)

Get futures candlesticks

Return specified contract candlesticks. If prefix `contract` with `mark_`, the contract's mark price candlesticks are returned; if prefix with `index_`, index price candlesticks will be returned.  Maximum of 2000 points are returned in one query. Be sure not to exceed the limit when specifying `from`, `to` and `interval`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract
$associate_array['from'] = 1546905600; // int | Start time of candlesticks, formatted in Unix timestamp in seconds. Default to`to - 100 * interval` if not specified
$associate_array['to'] = 1546935600; // int | End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time
$associate_array['limit'] = 100; // int | Maximum recent data points to return. `limit` is conflicted with `from` and `to`. If either `from` or `to` is specified, request will be rejected.
$associate_array['interval'] = '5m'; // string | Interval time between data points. Note that `1w` means natual week(Mon-Sun), while `7d` means every 7d since unix 0

try {
    $result = $apiInstance->listFuturesCandlesticks($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesCandlesticks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **from** | **int**| Start time of candlesticks, formatted in Unix timestamp in seconds. Default to&#x60;to - 100 * interval&#x60; if not specified | [optional]
 **to** | **int**| End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time | [optional]
 **limit** | **int**| Maximum recent data points to return. &#x60;limit&#x60; is conflicted with &#x60;from&#x60; and &#x60;to&#x60;. If either &#x60;from&#x60; or &#x60;to&#x60; is specified, request will be rejected. | [optional] [default to 100]
 **interval** | **string**| Interval time between data points. Note that &#x60;1w&#x60; means natual week(Mon-Sun), while &#x60;7d&#x60; means every 7d since unix 0 | [optional] [default to &#39;5m&#39;]

### Return type

[**\GateApi\Model\FuturesCandlestick[]**](../Model/FuturesCandlestick.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesPremiumIndex

> \GateApi\Model\FuturesPremiumIndex[] listFuturesPremiumIndex($settle, $contract, $from, $to, $limit, $interval)

Premium Index K-Line

Maximum of 1000 points can be returned in a query. Be sure not to exceed the limit when specifying from, to and interval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract
$associate_array['from'] = 1546905600; // int | Start time of candlesticks, formatted in Unix timestamp in seconds. Default to`to - 100 * interval` if not specified
$associate_array['to'] = 1546935600; // int | End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time
$associate_array['limit'] = 100; // int | Maximum recent data points to return. `limit` is conflicted with `from` and `to`. If either `from` or `to` is specified, request will be rejected.
$associate_array['interval'] = '5m'; // string | Interval time between data points

try {
    $result = $apiInstance->listFuturesPremiumIndex($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesPremiumIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **from** | **int**| Start time of candlesticks, formatted in Unix timestamp in seconds. Default to&#x60;to - 100 * interval&#x60; if not specified | [optional]
 **to** | **int**| End time of candlesticks, formatted in Unix timestamp in seconds. Default to current time | [optional]
 **limit** | **int**| Maximum recent data points to return. &#x60;limit&#x60; is conflicted with &#x60;from&#x60; and &#x60;to&#x60;. If either &#x60;from&#x60; or &#x60;to&#x60; is specified, request will be rejected. | [optional] [default to 100]
 **interval** | **string**| Interval time between data points | [optional] [default to &#39;5m&#39;]

### Return type

[**\GateApi\Model\FuturesPremiumIndex[]**](../Model/FuturesPremiumIndex.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesTickers

> \GateApi\Model\FuturesTicker[] listFuturesTickers($settle, $contract)

List futures tickers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract, return related data only if specified

try {
    $result = $apiInstance->listFuturesTickers($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesTickers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract, return related data only if specified | [optional]

### Return type

[**\GateApi\Model\FuturesTicker[]**](../Model/FuturesTicker.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesFundingRateHistory

> \GateApi\Model\FundingRateRecord[] listFuturesFundingRateHistory($settle, $contract, $limit)

Funding rate history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list

try {
    $result = $apiInstance->listFuturesFundingRateHistory($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesFundingRateHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]

### Return type

[**\GateApi\Model\FundingRateRecord[]**](../Model/FundingRateRecord.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesInsuranceLedger

> \GateApi\Model\InsuranceRecord[] listFuturesInsuranceLedger($settle, $limit)

Futures insurance balance history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list

try {
    $result = $apiInstance->listFuturesInsuranceLedger($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesInsuranceLedger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]

### Return type

[**\GateApi\Model\InsuranceRecord[]**](../Model/InsuranceRecord.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listContractStats

> \GateApi\Model\ContractStat[] listContractStats($settle, $contract, $from, $interval, $limit)

Futures stats

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract
$associate_array['from'] = 1604561000; // int | Start timestamp
$associate_array['interval'] = '5m'; // string | 
$associate_array['limit'] = 30; // int | 

try {
    $result = $apiInstance->listContractStats($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listContractStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **from** | **int**| Start timestamp | [optional]
 **interval** | **string**|  | [optional] [default to &#39;5m&#39;]
 **limit** | **int**|  | [optional] [default to 30]

### Return type

[**\GateApi\Model\ContractStat[]**](../Model/ContractStat.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getIndexConstituents

> \GateApi\Model\FuturesIndexConstituents getIndexConstituents($settle, $index)

Get index constituents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settle = 'usdt'; // string | Settle currency
$index = 'BTC_USDT'; // string | Index name

try {
    $result = $apiInstance->getIndexConstituents($settle, $index);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getIndexConstituents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **index** | **string**| Index name |

### Return type

[**\GateApi\Model\FuturesIndexConstituents**](../Model/FuturesIndexConstituents.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLiquidatedOrders

> \GateApi\Model\FuturesLiquidate[] listLiquidatedOrders($settle, $contract, $from, $to, $limit)

Retrieve liquidation history

Interval between `from` and `to` cannot exceeds 3600. Some private fields will not be returned in public endpoints. Refer to field description for detail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract, return related data only if specified
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list

try {
    $result = $apiInstance->listLiquidatedOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listLiquidatedOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]

### Return type

[**\GateApi\Model\FuturesLiquidate[]**](../Model/FuturesLiquidate.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesAccounts

> \GateApi\Model\FuturesAccount listFuturesAccounts($settle)

Query futures account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency

try {
    $result = $apiInstance->listFuturesAccounts($settle);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |

### Return type

[**\GateApi\Model\FuturesAccount**](../Model/FuturesAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesAccountBook

> \GateApi\Model\FuturesAccountBook[] listFuturesAccountBook($settle, $limit, $from, $to, $type)

Query account book

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp
$associate_array['type'] = 'dnw'; // string | Changing Type: - dnw: Deposit & Withdraw - pnl: Profit & Loss by reducing position - fee: Trading fee - refr: Referrer rebate - fund: Funding - point_dnw: POINT Deposit & Withdraw - point_fee: POINT Trading fee - point_refr: POINT Referrer rebate

try {
    $result = $apiInstance->listFuturesAccountBook($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesAccountBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]
 **type** | **string**| Changing Type: - dnw: Deposit &amp; Withdraw - pnl: Profit &amp; Loss by reducing position - fee: Trading fee - refr: Referrer rebate - fund: Funding - point_dnw: POINT Deposit &amp; Withdraw - point_fee: POINT Trading fee - point_refr: POINT Referrer rebate | [optional]

### Return type

[**\GateApi\Model\FuturesAccountBook[]**](../Model/FuturesAccountBook.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPositions

> \GateApi\Model\Position[] listPositions($settle)

List all positions of a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency

try {
    $result = $apiInstance->listPositions($settle);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |

### Return type

[**\GateApi\Model\Position[]**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPosition

> \GateApi\Model\Position getPosition($settle, $contract)

Get single position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract

try {
    $result = $apiInstance->getPosition($settle, $contract);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePositionMargin

> \GateApi\Model\Position updatePositionMargin($settle, $contract, $change)

Update position margin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract
$change = '0.01'; // string | Margin change. Use positive number to increase margin, negative number otherwise.

try {
    $result = $apiInstance->updatePositionMargin($settle, $contract, $change);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionMargin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **change** | **string**| Margin change. Use positive number to increase margin, negative number otherwise. |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePositionLeverage

> \GateApi\Model\Position updatePositionLeverage($settle, $contract, $leverage, $cross_leverage_limit)

Update position leverage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract
$leverage = '10'; // string | New position leverage
$cross_leverage_limit = '10'; // string | Cross margin leverage(valid only when `leverage` is 0)

try {
    $result = $apiInstance->updatePositionLeverage($settle, $contract, $leverage, $cross_leverage_limit);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **leverage** | **string**| New position leverage |
 **cross_leverage_limit** | **string**| Cross margin leverage(valid only when &#x60;leverage&#x60; is 0) | [optional]

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePositionRiskLimit

> \GateApi\Model\Position updatePositionRiskLimit($settle, $contract, $risk_limit)

Update position risk limit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract
$risk_limit = '10'; // string | New position risk limit

try {
    $result = $apiInstance->updatePositionRiskLimit($settle, $contract, $risk_limit);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updatePositionRiskLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **risk_limit** | **string**| New position risk limit |

### Return type

[**\GateApi\Model\Position**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## setDualMode

> \GateApi\Model\FuturesAccount setDualMode($settle, $dual_mode)

Enable or disable dual mode

Before setting dual mode, make sure all positions are closed and no orders are open

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$dual_mode = true; // bool | Whether to enable dual mode

try {
    $result = $apiInstance->setDualMode($settle, $dual_mode);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->setDualMode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **dual_mode** | **bool**| Whether to enable dual mode |

### Return type

[**\GateApi\Model\FuturesAccount**](../Model/FuturesAccount.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDualModePosition

> \GateApi\Model\Position[] getDualModePosition($settle, $contract)

Retrieve position detail in dual mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract

try {
    $result = $apiInstance->getDualModePosition($settle, $contract);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getDualModePosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\Position[]**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDualModePositionMargin

> \GateApi\Model\Position[] updateDualModePositionMargin($settle, $contract, $change, $dual_side)

Update position margin in dual mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract
$change = '0.01'; // string | Margin change. Use positive number to increase margin, negative number otherwise.
$dual_side = 'dual_long'; // string | Long or short position

try {
    $result = $apiInstance->updateDualModePositionMargin($settle, $contract, $change, $dual_side);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updateDualModePositionMargin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **change** | **string**| Margin change. Use positive number to increase margin, negative number otherwise. |
 **dual_side** | **string**| Long or short position |

### Return type

[**\GateApi\Model\Position[]**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDualModePositionLeverage

> \GateApi\Model\Position[] updateDualModePositionLeverage($settle, $contract, $leverage, $cross_leverage_limit)

Update position leverage in dual mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract
$leverage = '10'; // string | New position leverage
$cross_leverage_limit = '10'; // string | Cross margin leverage(valid only when `leverage` is 0)

try {
    $result = $apiInstance->updateDualModePositionLeverage($settle, $contract, $leverage, $cross_leverage_limit);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updateDualModePositionLeverage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **leverage** | **string**| New position leverage |
 **cross_leverage_limit** | **string**| Cross margin leverage(valid only when &#x60;leverage&#x60; is 0) | [optional]

### Return type

[**\GateApi\Model\Position[]**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateDualModePositionRiskLimit

> \GateApi\Model\Position[] updateDualModePositionRiskLimit($settle, $contract, $risk_limit)

Update position risk limit in dual mode

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract
$risk_limit = '10'; // string | New position risk limit

try {
    $result = $apiInstance->updateDualModePositionRiskLimit($settle, $contract, $risk_limit);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->updateDualModePositionRiskLimit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **risk_limit** | **string**| New position risk limit |

### Return type

[**\GateApi\Model\Position[]**](../Model/Position.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listFuturesOrders

> \GateApi\Model\FuturesOrder[] listFuturesOrders($settle, $contract, $status, $limit, $offset, $last_id)

List futures orders

Zero-filled order cannot be retrieved 10 minutes after order cancellation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract
$associate_array['status'] = 'open'; // string | Only list the orders with this status
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['last_id'] = '12345'; // string | Specify list staring point using the `id` of last record in previous list-query results

try {
    $result = $apiInstance->listFuturesOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listFuturesOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **status** | **string**| Only list the orders with this status |
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **last_id** | **string**| Specify list staring point using the &#x60;id&#x60; of last record in previous list-query results | [optional]

### Return type

[**\GateApi\Model\FuturesOrder[]**](../Model/FuturesOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createFuturesOrder

> \GateApi\Model\FuturesOrder createFuturesOrder($settle, $futures_order)

Create a futures order

- Creating futures orders requires `size`, which is number of contracts instead of currency amount. You can use `quanto_multiplier` in contract detail response to know how much currency 1 size contract represents - Zero-filled order cannot be retrieved 10 minutes after order cancellation. You will get a 404 not found for such orders - Set `reduce_only` to `true` can keep the position from changing side when reducing position size - In single position mode, to close a position, you need to set `size` to 0 and `close` to `true` - In dual position mode, to close one side position, you need to set `auto_size` side, `reduce_only` to true and `size` to 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$futures_order = new \GateApi\Model\FuturesOrder(); // \GateApi\Model\FuturesOrder | 

try {
    $result = $apiInstance->createFuturesOrder($settle, $futures_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->createFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **futures_order** | [**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)|  |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelFuturesOrders

> \GateApi\Model\FuturesOrder[] cancelFuturesOrders($settle, $contract, $side)

Cancel all `open` orders matched

Zero-filled order cannot be retrieved 10 minutes after order cancellation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract
$side = 'ask'; // string | All bids or asks. Both included if not specified

try {
    $result = $apiInstance->cancelFuturesOrders($settle, $contract, $side);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelFuturesOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |
 **side** | **string**| All bids or asks. Both included if not specified | [optional]

### Return type

[**\GateApi\Model\FuturesOrder[]**](../Model/FuturesOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBatchFuturesOrder

> \GateApi\Model\BatchFuturesOrder[] createBatchFuturesOrder($settle, $futures_order)

Create a batch of futures orders

- Up to 10 orders per request - If any of the order's parameters are missing or in the wrong format, all of them will not be executed, and a http status 400 error will be returned directly - If the parameters are checked and passed, all are executed. Even if there is a business logic error in the middle (such as insufficient funds), it will not affect other execution orders - The returned result is in array format, and the order corresponds to the orders in the request body - In the returned result, the `succeeded` field of type bool indicates whether the execution was successful or not - If the execution is successful, the normal order content is included; if the execution fails, the `label` field is included to indicate the cause of the error - In the rate limiting, each order is counted individually

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$futures_order = array(new \GateApi\Model\FuturesOrder()); // \GateApi\Model\FuturesOrder[] | 

try {
    $result = $apiInstance->createBatchFuturesOrder($settle, $futures_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->createBatchFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **futures_order** | [**\GateApi\Model\FuturesOrder[]**](../Model/FuturesOrder.md)|  |

### Return type

[**\GateApi\Model\BatchFuturesOrder[]**](../Model/BatchFuturesOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getFuturesOrder

> \GateApi\Model\FuturesOrder getFuturesOrder($settle, $order_id)

Get a single order

Zero-filled order cannot be retrieved 10 minutes after order cancellation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$order_id = '12345'; // string | Order ID returned, or user custom ID(i.e., `text` field). Operations based on custom ID can only be checked when the order is in orderbook.  When the order is finished, it can be checked within 60 seconds after the end of the order.  After that, only order ID is accepted.

try {
    $result = $apiInstance->getFuturesOrder($settle, $order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **order_id** | **string**| Order ID returned, or user custom ID(i.e., &#x60;text&#x60; field). Operations based on custom ID can only be checked when the order is in orderbook.  When the order is finished, it can be checked within 60 seconds after the end of the order.  After that, only order ID is accepted. |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## amendFuturesOrder

> \GateApi\Model\FuturesOrder amendFuturesOrder($settle, $order_id, $futures_order_amendment)

Amend an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$order_id = '12345'; // string | Order ID returned, or user custom ID(i.e., `text` field). Operations based on custom ID can only be checked when the order is in orderbook.  When the order is finished, it can be checked within 60 seconds after the end of the order.  After that, only order ID is accepted.
$futures_order_amendment = new \GateApi\Model\FuturesOrderAmendment(); // \GateApi\Model\FuturesOrderAmendment | 

try {
    $result = $apiInstance->amendFuturesOrder($settle, $order_id, $futures_order_amendment);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->amendFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **order_id** | **string**| Order ID returned, or user custom ID(i.e., &#x60;text&#x60; field). Operations based on custom ID can only be checked when the order is in orderbook.  When the order is finished, it can be checked within 60 seconds after the end of the order.  After that, only order ID is accepted. |
 **futures_order_amendment** | [**\GateApi\Model\FuturesOrderAmendment**](../Model/FuturesOrderAmendment.md)|  |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelFuturesOrder

> \GateApi\Model\FuturesOrder cancelFuturesOrder($settle, $order_id)

Cancel a single order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$order_id = '12345'; // string | Order ID returned, or user custom ID(i.e., `text` field). Operations based on custom ID can only be checked when the order is in orderbook.  When the order is finished, it can be checked within 60 seconds after the end of the order.  After that, only order ID is accepted.

try {
    $result = $apiInstance->cancelFuturesOrder($settle, $order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelFuturesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **order_id** | **string**| Order ID returned, or user custom ID(i.e., &#x60;text&#x60; field). Operations based on custom ID can only be checked when the order is in orderbook.  When the order is finished, it can be checked within 60 seconds after the end of the order.  After that, only order ID is accepted. |

### Return type

[**\GateApi\Model\FuturesOrder**](../Model/FuturesOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getMyTrades

> \GateApi\Model\MyFuturesTrade[] getMyTrades($settle, $contract, $order, $limit, $offset, $last_id)

List personal trading history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract, return related data only if specified
$associate_array['order'] = 12345; // int | Futures order ID, return related data only if specified
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['last_id'] = '12345'; // string | Specify list staring point using the `id` of last record in previous list-query results

try {
    $result = $apiInstance->getMyTrades($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getMyTrades: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **order** | **int**| Futures order ID, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **last_id** | **string**| Specify list staring point using the &#x60;id&#x60; of last record in previous list-query results | [optional]

### Return type

[**\GateApi\Model\MyFuturesTrade[]**](../Model/MyFuturesTrade.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPositionClose

> \GateApi\Model\PositionClose[] listPositionClose($settle, $contract, $limit, $offset, $from, $to)

List position close history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract, return related data only if specified
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0
$associate_array['from'] = 1547706332; // int | Start timestamp
$associate_array['to'] = 1547706332; // int | End timestamp

try {
    $result = $apiInstance->listPositionClose($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPositionClose: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]
 **from** | **int**| Start timestamp | [optional]
 **to** | **int**| End timestamp | [optional]

### Return type

[**\GateApi\Model\PositionClose[]**](../Model/PositionClose.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listLiquidates

> \GateApi\Model\FuturesLiquidate[] listLiquidates($settle, $contract, $limit, $at)

List liquidation history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract, return related data only if specified
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['at'] = 0; // int | Specify a liquidation timestamp

try {
    $result = $apiInstance->listLiquidates($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listLiquidates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **at** | **int**| Specify a liquidation timestamp | [optional] [default to 0]

### Return type

[**\GateApi\Model\FuturesLiquidate[]**](../Model/FuturesLiquidate.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## countdownCancelAllFutures

> \GateApi\Model\TriggerTime countdownCancelAllFutures($settle, $countdown_cancel_all_futures_task)

Countdown cancel orders

When the timeout set by the user is reached, if there is no cancel or set a new countdown, the related pending orders will be automatically cancelled.  This endpoint can be called repeatedly to set a new countdown or cancel the countdown. For example, call this endpoint at 30s intervals, each countdown`timeout` is set to 30s. If this endpoint is not called again within 30 seconds, all pending orders on the specified `market` will be automatically cancelled, if no `market` is specified, all market pending orders will be cancelled. If the `timeout` is set to 0 within 30 seconds, the countdown timer will expire and the cacnel function will be cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$countdown_cancel_all_futures_task = new \GateApi\Model\CountdownCancelAllFuturesTask(); // \GateApi\Model\CountdownCancelAllFuturesTask | 

try {
    $result = $apiInstance->countdownCancelAllFutures($settle, $countdown_cancel_all_futures_task);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->countdownCancelAllFutures: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **countdown_cancel_all_futures_task** | [**\GateApi\Model\CountdownCancelAllFuturesTask**](../Model/CountdownCancelAllFuturesTask.md)|  |

### Return type

[**\GateApi\Model\TriggerTime**](../Model/TriggerTime.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPriceTriggeredOrders

> \GateApi\Model\FuturesPriceTriggeredOrder[] listPriceTriggeredOrders($settle, $status, $contract, $limit, $offset)

List all auto orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$associate_array['settle'] = 'usdt'; // string | Settle currency
$associate_array['status'] = 'status_example'; // string | Only list the orders with this status
$associate_array['contract'] = 'BTC_USDT'; // string | Futures contract, return related data only if specified
$associate_array['limit'] = 100; // int | Maximum number of records to be returned in a single list
$associate_array['offset'] = 0; // int | List offset, starting from 0

try {
    $result = $apiInstance->listPriceTriggeredOrders($associate_array);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->listPriceTriggeredOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Note: the input parameter is an associative array with the keys listed as the parameter name below.


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **status** | **string**| Only list the orders with this status |
 **contract** | **string**| Futures contract, return related data only if specified | [optional]
 **limit** | **int**| Maximum number of records to be returned in a single list | [optional] [default to 100]
 **offset** | **int**| List offset, starting from 0 | [optional] [default to 0]

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder[]**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPriceTriggeredOrder

> \GateApi\Model\TriggerOrderResponse createPriceTriggeredOrder($settle, $futures_price_triggered_order)

Create a price-triggered order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$futures_price_triggered_order = new \GateApi\Model\FuturesPriceTriggeredOrder(); // \GateApi\Model\FuturesPriceTriggeredOrder | 

try {
    $result = $apiInstance->createPriceTriggeredOrder($settle, $futures_price_triggered_order);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->createPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **futures_price_triggered_order** | [**\GateApi\Model\FuturesPriceTriggeredOrder**](../Model/FuturesPriceTriggeredOrder.md)|  |

### Return type

[**\GateApi\Model\TriggerOrderResponse**](../Model/TriggerOrderResponse.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelPriceTriggeredOrderList

> \GateApi\Model\FuturesPriceTriggeredOrder[] cancelPriceTriggeredOrderList($settle, $contract)

Cancel all open orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$contract = 'BTC_USDT'; // string | Futures contract

try {
    $result = $apiInstance->cancelPriceTriggeredOrderList($settle, $contract);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelPriceTriggeredOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **contract** | **string**| Futures contract |

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder[]**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPriceTriggeredOrder

> \GateApi\Model\FuturesPriceTriggeredOrder getPriceTriggeredOrder($settle, $order_id)

Get a price-triggered order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$order_id = 'order_id_example'; // string | Retrieve the data of the order with the specified ID

try {
    $result = $apiInstance->getPriceTriggeredOrder($settle, $order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->getPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **order_id** | **string**| Retrieve the data of the order with the specified ID |

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## cancelPriceTriggeredOrder

> \GateApi\Model\FuturesPriceTriggeredOrder cancelPriceTriggeredOrder($settle, $order_id)

cancel a price-triggered order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Gate APIv4 authorization: apiv4
$config = GateApi\Configuration::getDefaultConfiguration()->setKey('YOUR_API_KEY')->setSecret('YOUR_API_SECRET');


$apiInstance = new GateApi\Api\FuturesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settle = 'usdt'; // string | Settle currency
$order_id = 'order_id_example'; // string | Retrieve the data of the order with the specified ID

try {
    $result = $apiInstance->cancelPriceTriggeredOrder($settle, $order_id);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling FuturesApi->cancelPriceTriggeredOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settle** | **string**| Settle currency |
 **order_id** | **string**| Retrieve the data of the order with the specified ID |

### Return type

[**\GateApi\Model\FuturesPriceTriggeredOrder**](../Model/FuturesPriceTriggeredOrder.md)

### Authorization

[apiv4](../../README.md#apiv4)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

