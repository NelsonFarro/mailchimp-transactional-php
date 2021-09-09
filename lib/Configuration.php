<?php

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.37
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional;

use GuzzleHttp\Client as RequestClient;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

use MailchimpTransactional\Api\ExportsApi;
use MailchimpTransactional\Api\InboundApi;
use MailchimpTransactional\Api\IpsApi;
use MailchimpTransactional\Api\MessagesApi;
use MailchimpTransactional\Api\MetadataApi;
use MailchimpTransactional\Api\RejectsApi;
use MailchimpTransactional\Api\SendersApi;
use MailchimpTransactional\Api\SubaccountsApi;
use MailchimpTransactional\Api\TagsApi;
use MailchimpTransactional\Api\TemplatesApi;
use MailchimpTransactional\Api\UrlsApi;
use MailchimpTransactional\Api\UsersApi;
use MailchimpTransactional\Api\WebhooksApi;
use MailchimpTransactional\Api\WhitelistsApi;

class Configuration
{
    protected $host = 'https://mandrillapp.com/api/1.0';
    protected $apiKey = '';
    protected $requestClient;
    protected $defaultOutputFormat = '';

    public static $formatList = ['json', 'xml', 'php', 'yaml'];

    public function __construct()
    {
        $this->requestClient = new RequestClient([
            'defaults' => [
                'timeout' => 300.0
            ]
        ]);

        // API Routes
        $this->exports = new ExportsApi($this);
        $this->inbound = new InboundApi($this);
        $this->ips = new IpsApi($this);
        $this->messages = new MessagesApi($this);
        $this->metadata = new MetadataApi($this);
        $this->rejects = new RejectsApi($this);
        $this->senders = new SendersApi($this);
        $this->subaccounts = new SubaccountsApi($this);
        $this->tags = new TagsApi($this);
        $this->templates = new TemplatesApi($this);
        $this->urls = new UrlsApi($this);
        $this->users = new UsersApi($this);
        $this->webhooks = new WebhooksApi($this);
        $this->whitelists = new WhitelistsApi($this);
    }

    public function setApiKey($apiKey = '')
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getRequestClient()
    {
        return $this->requestClient;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setDefaultOutputFormat($outputFormat = '')
    {
        $this->defaultOutputFormat = $outputFormat;
        return $this;
    }

    public function getDefaultOutputFormat()
    {
        return $this->defaultOutputFormat;
    }

    //  HTTP POST request helper
    public function post($path, $body)
    {
        // Apply API key as body param
        $body['key'] = $this->getApiKey();

        // prepare request params
        $postUrl = $this->getHost() . $path;
        $postBody = [ 'form_params' => $body ];

        // set output format
        $defaultOutputFormat = $this->getDefaultOutputFormat();
        $useDefaultOutputFormat = true;

        if (array_key_exists('outputFormat', $body)) {
            $selectedFormat = strtolower($body['outputFormat']);

            if (in_array($selectedFormat, Configuration::$formatList)) {
                $postUrl = $postUrl . '.' . $selectedFormat;
                unset($body['outputFormat']);
                $useDefaultOutputFormat = false;
            }
        }

        if ($useDefaultOutputFormat && in_array($defaultOutputFormat, Configuration::$formatList)) {
            $postUrl = $postUrl . '.' . $defaultOutputFormat;
        }

        // send request
        try {
            $client = $this->getRequestClient();
            $response = $client->request('POST', $postUrl, $postBody);
            $resp = $response->getBody();
            $contentType = $response->getHeaderLine('content-type');

            if (strpos($contentType, 'application/json') !== false) {
                return json_decode($resp);
            }

            return $resp;
        } catch (RequestException $e) {
            return $e->hasResponse() ? Psr7\str($e->getResponse()) : $e;
        }
    }
}
