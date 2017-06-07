<?php
/**
 * DefaultApi
 * PHP version 5
 *
 * @category Class
 * @package  Deeparteffects\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Deep Art Effects
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2017-02-10T16:24:46Z
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Deeparteffects\Client\Api;

use \Deeparteffects\Client\ApiClient;
use \Deeparteffects\Client\ApiException;
use \Deeparteffects\Client\Configuration;
use \Deeparteffects\Client\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Deeparteffects\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DefaultApi
{
    /**
     * API Client
     *
     * @var \Deeparteffects\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    protected $api_access_key;

    protected $api_secret_key;

    protected $api_key;

    protected $region = 'eu-west-1';

    /**
     * Constructor
     *
     * @param \Deeparteffects\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Deeparteffects\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * @param mixed $api_key
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;

        Configuration::getDefaultConfiguration()->setApiKey('x-api-key', $this->api_key);
    }

    /**
     * @param mixed $api_access_key
     */
    public function setApiAccessKey($api_access_key)
    {
        $this->api_access_key = $api_access_key;
    }

    /**
     * @param mixed $api_secret_key
     */
    public function setApiSecretKey($api_secret_key)
    {
        $this->api_secret_key = $api_secret_key;
    }

    /**
     * Get API client
     *
     * @return \Deeparteffects\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Deeparteffects\Client\ApiClient $apiClient set the API client
     *
     * @return DefaultApi
     */
    public function setApiClient(\Deeparteffects\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation resultGet
     *
     * 
     *
     * @param string $submission_id  (optional)
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return \Deeparteffects\Client\Model\Result
     */
    public function resultGet($submission_id = null)
    {
        list($response) = $this->resultGetWithHttpInfo($submission_id);
        return $response;
    }

    /**
     * Operation resultGetWithHttpInfo
     *
     * 
     *
     * @param string $submission_id  (optional)
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return array of \Deeparteffects\Client\Model\Result, HTTP status code, HTTP response headers (array of strings)
     */
    public function resultGetWithHttpInfo($submission_id = null)
    {
        // parse inputs
        $resourcePath = "/result";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($submission_id !== null) {
            $queryParams['submissionId'] = $this->apiClient->getSerializer()->toQueryValue($submission_id);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Deeparteffects\Client\Model\Result',
                '/result',
                $this->region,
                $this->api_access_key,
                $this->api_secret_key
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Deeparteffects\Client\Model\Result', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\Result', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation resultOptions
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return \Deeparteffects\Client\Model\ModelEmpty
     */
    public function resultOptions()
    {
        list($response) = $this->resultOptionsWithHttpInfo();
        return $response;
    }

    /**
     * Operation resultOptionsWithHttpInfo
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return array of \Deeparteffects\Client\Model\ModelEmpty, HTTP status code, HTTP response headers (array of strings)
     */
    public function resultOptionsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/result";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'OPTIONS',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Deeparteffects\Client\Model\ModelEmpty',
                '/result',
                $this->region,
                $this->api_access_key,
                $this->api_secret_key
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Deeparteffects\Client\Model\ModelEmpty', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\ModelEmpty', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation stylesGet
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return \Deeparteffects\Client\Model\Style
     */
    public function stylesGet()
    {
        list($response) = $this->stylesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation stylesGetWithHttpInfo
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return array of \Deeparteffects\Client\Model\Style, HTTP status code, HTTP response headers (array of strings)
     */
    public function stylesGetWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/styles";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Deeparteffects\Client\Model\Style',
                '/styles',
                $this->region,
                $this->api_access_key,
                $this->api_secret_key
            );
            $styles = array();
            foreach ($response as $style) {
                $styles[] = $this->apiClient->getSerializer()->deserialize($style, '\Deeparteffects\Client\Model\Style', $httpHeader);
            }
            return [$styles, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\Style', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation stylesOptions
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return \Deeparteffects\Client\Model\ModelEmpty
     */
    public function stylesOptions()
    {
        list($response) = $this->stylesOptionsWithHttpInfo();
        return $response;
    }

    /**
     * Operation stylesOptionsWithHttpInfo
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return array of \Deeparteffects\Client\Model\ModelEmpty, HTTP status code, HTTP response headers (array of strings)
     */
    public function stylesOptionsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/styles";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'OPTIONS',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Deeparteffects\Client\Model\ModelEmpty',
                '/styles',
                $this->region,
                $this->api_access_key,
                $this->api_secret_key
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Deeparteffects\Client\Model\ModelEmpty', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\ModelEmpty', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation uploadOptions
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return \Deeparteffects\Client\Model\ModelEmpty
     */
    public function uploadOptions()
    {
        list($response) = $this->uploadOptionsWithHttpInfo();
        return $response;
    }

    /**
     * Operation uploadOptionsWithHttpInfo
     *
     * 
     *
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return array of \Deeparteffects\Client\Model\ModelEmpty, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadOptionsWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/upload";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'OPTIONS',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Deeparteffects\Client\Model\ModelEmpty',
                '/upload',
                $this->region,
                $this->api_access_key,
                $this->api_secret_key
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Deeparteffects\Client\Model\ModelEmpty', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\ModelEmpty', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation uploadPost
     *
     * 
     *
     * @param \Deeparteffects\Client\Model\UploadRequest $upload_request  (required)
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return \Deeparteffects\Client\Model\UploadResponse
     */
    public function uploadPost($upload_request)
    {
        list($response) = $this->uploadPostWithHttpInfo($upload_request);
        return $response;
    }

    /**
     * Operation uploadPostWithHttpInfo
     *
     * 
     *
     * @param \Deeparteffects\Client\Model\UploadRequest $upload_request  (required)
     * @throws \Deeparteffects\Client\ApiException on non-2xx response
     * @return array of \Deeparteffects\Client\Model\UploadResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadPostWithHttpInfo($upload_request)
    {
        // verify the required parameter 'upload_request' is set
        if ($upload_request === null) {
            throw new \InvalidArgumentException('Missing the required parameter $upload_request when calling uploadPost');
        }
        // parse inputs
        $resourcePath = "/upload";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($upload_request)) {
            $_tempBody = $upload_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('x-api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['x-api-key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('Authorization');
        if (strlen($apiKey) !== 0) {
            $headerParams['Authorization'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Deeparteffects\Client\Model\UploadResponse',
                '/upload',
                $this->region,
                $this->api_access_key,
                $this->api_secret_key
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Deeparteffects\Client\Model\UploadResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\UploadResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Deeparteffects\Client\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
