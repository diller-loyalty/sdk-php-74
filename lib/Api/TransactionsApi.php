<?php
/**
 * TransactionsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DillerAPI\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use DillerAPI\ApiException;
use DillerAPI\Configuration;
use DillerAPI\HeaderSelector;
use DillerAPI\ObjectSerializer;

/**
 * TransactionsApi Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class TransactionsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation cancelTransaction
     *
     * Cancel transaction
     *
     * @param  string $storeId storeId (required)
     * @param  string $externalTransactionId The store&#x27;s transaction unique identifier. Eg. Order-1234 (required)
     * @param  \DillerAPI\Model\CancelationReason $body body (optional)
     *
     * @throws {{invokerPackage}}\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DillerAPI\Model\ActionResponse
     */
    public function cancelTransaction($storeId, $externalTransactionId, $body = null)
    {
        list($response) = $this->cancelTransactionWithHttpInfo($storeId, $externalTransactionId, $body);
        return $response;
    }

    /**
     * Operation cancelTransactionWithHttpInfo
     *
     * Cancel transaction
     *
     * @param  string $storeId (required)
     * @param  string $externalTransactionId The store&#x27;s transaction unique identifier. Eg. Order-1234 (required)
     * @param  \DillerAPI\Model\CancelationReason $body (optional)
     *
     * @throws {{invokerPackage}}\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DillerAPI\Model\ActionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelTransactionWithHttpInfo($storeId, $externalTransactionId, $body = null)
    {
        $returnType = '\DillerAPI\Model\ActionResponse';
        $request = $this->cancelTransactionRequest($storeId, $externalTransactionId, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DillerAPI\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DillerAPI\Model\ActionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation cancelTransactionAsync
     *
     * Cancel transaction
     *
     * @param  string $storeId (required)
     * @param  string $externalTransactionId The store&#x27;s transaction unique identifier. Eg. Order-1234 (required)
     * @param  \DillerAPI\Model\CancelationReason $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelTransactionAsync($storeId, $externalTransactionId, $body = null)
    {
        return $this->cancelTransactionAsyncWithHttpInfo($storeId, $externalTransactionId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelTransactionAsyncWithHttpInfo
     *
     * Cancel transaction
     *
     * @param  string $storeId (required)
     * @param  string $externalTransactionId The store&#x27;s transaction unique identifier. Eg. Order-1234 (required)
     * @param  \DillerAPI\Model\CancelationReason $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelTransactionAsyncWithHttpInfo($storeId, $externalTransactionId, $body = null)
    {
        $returnType = '\DillerAPI\Model\ActionResponse';
        $request = $this->cancelTransactionRequest($storeId, $externalTransactionId, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'cancelTransaction'
     *
     * @param  string $storeId (required)
     * @param  string $externalTransactionId The store&#x27;s transaction unique identifier. Eg. Order-1234 (required)
     * @param  \DillerAPI\Model\CancelationReason $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelTransactionRequest($storeId, $externalTransactionId, $body = null)
    {
        // verify the required parameter 'storeId' is set
        if ($storeId === null || (is_array($storeId) && count($storeId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $storeId when calling cancelTransaction'
            );
        }
        // verify the required parameter 'externalTransactionId' is set
        if ($externalTransactionId === null || (is_array($externalTransactionId) && count($externalTransactionId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $externalTransactionId when calling cancelTransaction'
            );
        }

        $resourcePath = '/api/v2.0/stores/{storeId}/transactions/{externalTransactionId}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($storeId !== null) {
            $resourcePath = str_replace(
                '{' . 'storeId' . '}',
                ObjectSerializer::toPathValue($storeId),
                $resourcePath
            );
        }
        // path params
        if ($externalTransactionId !== null) {
            $resourcePath = str_replace(
                '{' . 'externalTransactionId' . '}',
                ObjectSerializer::toPathValue($externalTransactionId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation createRefundTransaction
     *
     * Allows for the partial refund of a previous transaction, without taking into account any coupons or stamp cards applied earlier.
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  string $transactionId The original transaction Id that is being refunded (required)
     * @param  \DillerAPI\Model\CreateRefundTransactionRequest $body CreateRefundTransactionRequest object (optional)
     *
     * @throws {{invokerPackage}}\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DillerAPI\Model\ActionResponse
     */
    public function createRefundTransaction($storeId, $memberId, $transactionId, $body = null)
    {
        list($response) = $this->createRefundTransactionWithHttpInfo($storeId, $memberId, $transactionId, $body);
        return $response;
    }

    /**
     * Operation createRefundTransactionWithHttpInfo
     *
     * Allows for the partial refund of a previous transaction, without taking into account any coupons or stamp cards applied earlier.
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  string $transactionId The original transaction Id that is being refunded (required)
     * @param  \DillerAPI\Model\CreateRefundTransactionRequest $body CreateRefundTransactionRequest object (optional)
     *
     * @throws {{invokerPackage}}\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DillerAPI\Model\ActionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createRefundTransactionWithHttpInfo($storeId, $memberId, $transactionId, $body = null)
    {
        $returnType = '\DillerAPI\Model\ActionResponse';
        $request = $this->createRefundTransactionRequest($storeId, $memberId, $transactionId, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DillerAPI\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DillerAPI\Model\ActionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createRefundTransactionAsync
     *
     * Allows for the partial refund of a previous transaction, without taking into account any coupons or stamp cards applied earlier.
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  string $transactionId The original transaction Id that is being refunded (required)
     * @param  \DillerAPI\Model\CreateRefundTransactionRequest $body CreateRefundTransactionRequest object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundTransactionAsync($storeId, $memberId, $transactionId, $body = null)
    {
        return $this->createRefundTransactionAsyncWithHttpInfo($storeId, $memberId, $transactionId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createRefundTransactionAsyncWithHttpInfo
     *
     * Allows for the partial refund of a previous transaction, without taking into account any coupons or stamp cards applied earlier.
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  string $transactionId The original transaction Id that is being refunded (required)
     * @param  \DillerAPI\Model\CreateRefundTransactionRequest $body CreateRefundTransactionRequest object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createRefundTransactionAsyncWithHttpInfo($storeId, $memberId, $transactionId, $body = null)
    {
        $returnType = '\DillerAPI\Model\ActionResponse';
        $request = $this->createRefundTransactionRequest($storeId, $memberId, $transactionId, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createRefundTransaction'
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  string $transactionId The original transaction Id that is being refunded (required)
     * @param  \DillerAPI\Model\CreateRefundTransactionRequest $body CreateRefundTransactionRequest object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createRefundTransactionRequest($storeId, $memberId, $transactionId, $body = null)
    {
        // verify the required parameter 'storeId' is set
        if ($storeId === null || (is_array($storeId) && count($storeId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $storeId when calling createRefundTransaction'
            );
        }
        // verify the required parameter 'memberId' is set
        if ($memberId === null || (is_array($memberId) && count($memberId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $memberId when calling createRefundTransaction'
            );
        }
        // verify the required parameter 'transactionId' is set
        if ($transactionId === null || (is_array($transactionId) && count($transactionId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transactionId when calling createRefundTransaction'
            );
        }

        $resourcePath = '/api/v2.0/stores/{storeId}/members/{memberId}/transactions/{transactionId}/refund';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($storeId !== null) {
            $resourcePath = str_replace(
                '{' . 'storeId' . '}',
                ObjectSerializer::toPathValue($storeId),
                $resourcePath
            );
        }
        // path params
        if ($memberId !== null) {
            $resourcePath = str_replace(
                '{' . 'memberId' . '}',
                ObjectSerializer::toPathValue($memberId),
                $resourcePath
            );
        }
        // path params
        if ($transactionId !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionId' . '}',
                ObjectSerializer::toPathValue($transactionId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
     * Operation createTransaction
     *
     * Creates transaction
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  \DillerAPI\Model\CreateTransactionRequest $body CreateTransactionRequest object (optional)
     *
     * @throws {{invokerPackage}}\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \DillerAPI\Model\ActionResponse
     */
    public function createTransaction($storeId, $memberId, $body = null)
    {
        list($response) = $this->createTransactionWithHttpInfo($storeId, $memberId, $body);
        return $response;
    }

    /**
     * Operation createTransactionWithHttpInfo
     *
     * Creates transaction
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  \DillerAPI\Model\CreateTransactionRequest $body CreateTransactionRequest object (optional)
     *
     * @throws {{invokerPackage}}\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \DillerAPI\Model\ActionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createTransactionWithHttpInfo($storeId, $memberId, $body = null)
    {
        $returnType = '\DillerAPI\Model\ActionResponse';
        $request = $this->createTransactionRequest($storeId, $memberId, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DillerAPI\Model\ApiError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\DillerAPI\Model\ActionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createTransactionAsync
     *
     * Creates transaction
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  \DillerAPI\Model\CreateTransactionRequest $body CreateTransactionRequest object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTransactionAsync($storeId, $memberId, $body = null)
    {
        return $this->createTransactionAsyncWithHttpInfo($storeId, $memberId, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createTransactionAsyncWithHttpInfo
     *
     * Creates transaction
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  \DillerAPI\Model\CreateTransactionRequest $body CreateTransactionRequest object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createTransactionAsyncWithHttpInfo($storeId, $memberId, $body = null)
    {
        $returnType = '\DillerAPI\Model\ActionResponse';
        $request = $this->createTransactionRequest($storeId, $memberId, $body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'createTransaction'
     *
     * @param  string $storeId Store Id (required)
     * @param  string $memberId Member Id (required)
     * @param  \DillerAPI\Model\CreateTransactionRequest $body CreateTransactionRequest object (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createTransactionRequest($storeId, $memberId, $body = null)
    {
        // verify the required parameter 'storeId' is set
        if ($storeId === null || (is_array($storeId) && count($storeId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $storeId when calling createTransaction'
            );
        }
        // verify the required parameter 'memberId' is set
        if ($memberId === null || (is_array($memberId) && count($memberId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $memberId when calling createTransaction'
            );
        }

        $resourcePath = '/api/v2.0/stores/{storeId}/members/{memberId}/transactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($storeId !== null) {
            $resourcePath = str_replace(
                '{' . 'storeId' . '}',
                ObjectSerializer::toPathValue($storeId),
                $resourcePath
            );
        }
        // path params
        if ($memberId !== null) {
            $resourcePath = str_replace(
                '{' . 'memberId' . '}',
                ObjectSerializer::toPathValue($memberId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;

            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
}
