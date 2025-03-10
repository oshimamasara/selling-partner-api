<?php
/**
 * FeesApi
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Product Fees
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\ObjectSerializer;

/**
 * FeesApi Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 */
class FeesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param Configuration   $config
     * @param ClientInterface $client
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config;
        $this->headerSelector = $selector ?: new HeaderSelector($this->config);
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getMyFeesEstimateForASIN
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body body (required)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse
     */
    public function getMyFeesEstimateForASIN($asin, $body)
    {
        $response = $this->getMyFeesEstimateForASINWithHttpInfo($asin, $body);
        return $response;
    }

    /**
     * Operation getMyFeesEstimateForASINWithHttpInfo
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMyFeesEstimateForASINWithHttpInfo($asin, $body)
    {
        $request = $this->getMyFeesEstimateForASINRequest($asin, $body);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $body = (string) $e->getResponse()->getBody();
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $body : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 400:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 401:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 403:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 404:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 429:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 500:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 503:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
            }

            $returnType = '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation getMyFeesEstimateForASINAsync
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMyFeesEstimateForASINAsync($asin, $body)
    {
        return $this->getMyFeesEstimateForASINAsyncWithHttpInfo($asin, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMyFeesEstimateForASINAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMyFeesEstimateForASINAsyncWithHttpInfo($asin, $body)
    {
        $returnType = '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse';
        $request = $this->getMyFeesEstimateForASINRequest($asin, $body);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $body = (string) $response->getBody();
                    $this->writeDebug($response);
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMyFeesEstimateForASIN'
     *
     * @param  string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getMyFeesEstimateForASINRequest($asin, $body)
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $asin when calling getMyFeesEstimateForASIN'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getMyFeesEstimateForASIN'
            );
        }

        $resourcePath = '/products/fees/v0/items/{Asin}/feesEstimate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($asin !== null) {
            $resourcePath = str_replace(
                '{' . 'Asin' . '}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation getMyFeesEstimateForSKU
     *
     * @param  string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body body (required)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse
     */
    public function getMyFeesEstimateForSKU($seller_sku, $body)
    {
        $response = $this->getMyFeesEstimateForSKUWithHttpInfo($seller_sku, $body);
        return $response;
    }

    /**
     * Operation getMyFeesEstimateForSKUWithHttpInfo
     *
     * @param  string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getMyFeesEstimateForSKUWithHttpInfo($seller_sku, $body)
    {
        $request = $this->getMyFeesEstimateForSKURequest($seller_sku, $body);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $body = (string) $e->getResponse()->getBody();
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $body : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 400:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 401:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 403:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 404:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 429:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 500:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
                case 503:
                    if ('\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse', $response->getHeaders());
            }

            $returnType = '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation getMyFeesEstimateForSKUAsync
     *
     * 
     *
     * @param  string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMyFeesEstimateForSKUAsync($seller_sku, $body)
    {
        return $this->getMyFeesEstimateForSKUAsyncWithHttpInfo($seller_sku, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getMyFeesEstimateForSKUAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getMyFeesEstimateForSKUAsyncWithHttpInfo($seller_sku, $body)
    {
        $returnType = '\SellingPartnerApi\Model\Fees\GetMyFeesEstimateResponse';
        $request = $this->getMyFeesEstimateForSKURequest($seller_sku, $body);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $body = (string) $response->getBody();
                    $this->writeDebug($response);
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $body
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMyFeesEstimateForSKU'
     *
     * @param  string $seller_sku Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#39;s SellerId, which is included with every operation that you submit. (required)
     * @param  \SellingPartnerApi\Model\Fees\GetMyFeesEstimateRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getMyFeesEstimateForSKURequest($seller_sku, $body)
    {
        // verify the required parameter 'seller_sku' is set
        if ($seller_sku === null || (is_array($seller_sku) && count($seller_sku) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $seller_sku when calling getMyFeesEstimateForSKU'
            );
        }
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling getMyFeesEstimateForSKU'
            );
        }

        $resourcePath = '/products/fees/v0/listings/{SellerSKU}/feesEstimate';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($seller_sku !== null) {
            $resourcePath = str_replace(
                '{' . 'SellerSKU' . '}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * Writes to the debug log file
     *
     * @param any $data
     * @return void
     */
    private function writeDebug($data)
    {
        if ($this->config->getDebug()) {
            file_put_contents($this->config->getDebugFile(), '[' . date('Y-m-d H:i:s') . ']: ' . print_r($data, true) . "\n", FILE_APPEND);
        }
    }
}
