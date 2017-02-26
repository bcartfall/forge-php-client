<?php
/**
 * HubsApi
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Client\Api;

use \Autodesk\Client\ApiClient;
use \Autodesk\Client\ApiException;
use \Autodesk\Client\Configuration;
use \Autodesk\Client\ObjectSerializer;

/**
 * HubsApi Class Doc Comment
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HubsApi extends AbstractApi
{
    /**
     * Operation getHub
     *
     * 
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Hub
     */
    public function getHub($hub_id)
    {
        list($response) = $this->getHubWithHttpInfo($hub_id);
        return $response;
    }

    /**
     * Operation getHubWithHttpInfo
     *
     * 
     *
     * @param string $hub_id the &#x60;hub id&#x60; for the current operation (required)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Hub, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHubWithHttpInfo($hub_id)
    {
        // verify the required parameter 'hub_id' is set
        if ($hub_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $hub_id when calling getHub');
        }
        // parse inputs
        $resourcePath = "/project/v1/hubs/{hub_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // path params
        if ($hub_id !== null) {
            $resourcePath = str_replace(
                "{" . "hub_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($hub_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if ($this->authClient->hasAccessToken()) {
            $headerParams['Authorization'] = $this->getAuthHeader();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Hub',
                '/project/v1/hubs/{hub_id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Hub', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Hub', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getHubs
     *
     * 
     *
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return \Autodesk\Client\Model\Hubs
     */
    public function getHubs($filter_id = null, $filter_extension_type = null)
    {
        list($response) = $this->getHubsWithHttpInfo($filter_id, $filter_extension_type);
        return $response;
    }

    /**
     * Operation getHubsWithHttpInfo
     *
     * 
     *
     * @param string[] $filter_id filter by the &#x60;id&#x60; of the &#x60;ref&#x60; target (optional)
     * @param string[] $filter_extension_type filter by the extension type (optional)
     * @throws \Autodesk\Client\ApiException on non-2xx response
     * @return array of \Autodesk\Client\Model\Hubs, HTTP status code, HTTP response headers (array of strings)
     */
    public function getHubsWithHttpInfo($filter_id = null, $filter_extension_type = null)
    {
        // parse inputs
        $resourcePath = "/project/v1/hubs";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/vnd.api+json']);

        // query params
        if (is_array($filter_id)) {
            $filter_id = $this->apiClient->getSerializer()->serializeCollection($filter_id, 'csv', true);
        }
        if ($filter_id !== null) {
            $queryParams['filter[id]'] = $this->apiClient->getSerializer()->toQueryValue($filter_id);
        }
        // query params
        if (is_array($filter_extension_type)) {
            $filter_extension_type = $this->apiClient->getSerializer()->serializeCollection($filter_extension_type, 'csv', true);
        }
        if ($filter_extension_type !== null) {
            $queryParams['filter[extension.type]'] = $this->apiClient->getSerializer()->toQueryValue($filter_extension_type);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if ($this->authClient->hasAccessToken()) {
            $headerParams['Authorization'] = $this->getAuthHeader();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Autodesk\Client\Model\Hubs',
                '/project/v1/hubs'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Autodesk\Client\Model\Hubs', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Hubs', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Autodesk\Client\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
