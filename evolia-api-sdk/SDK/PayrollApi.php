<?php
/**
 * PayrollApi
 * PHP version 5
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Evolia
 *
 * Connection of Troops & Evolia
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.23
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Evolia\SDK;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Evolia\ApiException;
use Evolia\Configuration;
use Evolia\HeaderSelector;
use Evolia\ObjectSerializer;

/**
 * PayrollApi Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PayrollApi
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
     * Operation payrollsGet
     *
     * Get Payrolls by date range
     *
     * @param  string $startDate startDate (required)
     * @param  string $endDate endDate (required)
     *
     * @throws \Evolia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Evolia\Model\PayrollViewModel
     */
    public function payrollsGet($startDate, $endDate)
    {
        list($response) = $this->payrollsGetWithHttpInfo($startDate, $endDate);
        return $response;
    }

    /**
     * Operation payrollsGetWithHttpInfo
     *
     * Get Payrolls by date range
     *
     * @param  string $startDate (required)
     * @param  string $endDate (required)
     *
     * @throws \Evolia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Evolia\Model\PayrollViewModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function payrollsGetWithHttpInfo($startDate, $endDate)
    {
        $returnType = '\Evolia\Model\PayrollViewModel';
        $request = $this->payrollsGetRequest($startDate, $endDate);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Evolia\Model\PayrollViewModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation payrollsGetAsync
     *
     * Get Payrolls by date range
     *
     * @param  string $startDate (required)
     * @param  string $endDate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payrollsGetAsync($startDate, $endDate)
    {
        return $this->payrollsGetAsyncWithHttpInfo($startDate, $endDate)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation payrollsGetAsyncWithHttpInfo
     *
     * Get Payrolls by date range
     *
     * @param  string $startDate (required)
     * @param  string $endDate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payrollsGetAsyncWithHttpInfo($startDate, $endDate)
    {
        $returnType = '\Evolia\Model\PayrollViewModel';
        $request = $this->payrollsGetRequest($startDate, $endDate);

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
     * Create request for operation 'payrollsGet'
     *
     * @param  string $startDate (required)
     * @param  string $endDate (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function payrollsGetRequest($startDate, $endDate)
    {
        // verify the required parameter 'startDate' is set
        if ($startDate === null || (is_array($startDate) && count($startDate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $startDate when calling payrollsGet'
            );
        }
        // verify the required parameter 'endDate' is set
        if ($endDate === null || (is_array($endDate) && count($endDate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $endDate when calling payrollsGet'
            );
        }

        $resourcePath = '/payrolls';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($startDate !== null) {
            $queryParams['startDate'] = ObjectSerializer::toQueryValue($startDate, null);
        }
        // query params
        if ($endDate !== null) {
            $queryParams['endDate'] = ObjectSerializer::toQueryValue($endDate, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation payrollsPayrollIdGet
     *
     * Get Payroll by it's id
     *
     * @param  int $payrollId Payroll Evolia identifier (required)
     *
     * @throws \Evolia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Evolia\Model\PayrollViewModelList
     */
    public function payrollsPayrollIdGet($payrollId)
    {
        list($response) = $this->payrollsPayrollIdGetWithHttpInfo($payrollId);
        return $response;
    }

    /**
     * Operation payrollsPayrollIdGetWithHttpInfo
     *
     * Get Payroll by it's id
     *
     * @param  int $payrollId Payroll Evolia identifier (required)
     *
     * @throws \Evolia\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Evolia\Model\PayrollViewModelList, HTTP status code, HTTP response headers (array of strings)
     */
    public function payrollsPayrollIdGetWithHttpInfo($payrollId)
    {
        $returnType = '\Evolia\Model\PayrollViewModelList';
        $request = $this->payrollsPayrollIdGetRequest($payrollId);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Evolia\Model\PayrollViewModelList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation payrollsPayrollIdGetAsync
     *
     * Get Payroll by it's id
     *
     * @param  int $payrollId Payroll Evolia identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payrollsPayrollIdGetAsync($payrollId)
    {
        return $this->payrollsPayrollIdGetAsyncWithHttpInfo($payrollId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation payrollsPayrollIdGetAsyncWithHttpInfo
     *
     * Get Payroll by it's id
     *
     * @param  int $payrollId Payroll Evolia identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function payrollsPayrollIdGetAsyncWithHttpInfo($payrollId)
    {
        $returnType = '\Evolia\Model\PayrollViewModelList';
        $request = $this->payrollsPayrollIdGetRequest($payrollId);

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
     * Create request for operation 'payrollsPayrollIdGet'
     *
     * @param  int $payrollId Payroll Evolia identifier (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function payrollsPayrollIdGetRequest($payrollId)
    {
        // verify the required parameter 'payrollId' is set
        if ($payrollId === null || (is_array($payrollId) && count($payrollId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payrollId when calling payrollsPayrollIdGet'
            );
        }

        $resourcePath = '/payrolls/{payrollId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($payrollId !== null) {
            $resourcePath = str_replace(
                '{' . 'payrollId' . '}',
                ObjectSerializer::toPathValue($payrollId),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
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
