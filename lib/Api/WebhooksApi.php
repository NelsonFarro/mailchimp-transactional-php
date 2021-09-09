<?php

/**
 * WebhooksApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

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

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\Configuration;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * WebhooksApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhooksApi
{
    protected $Configuration;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Add webhook
     * Add a new webhook.
     */
    public function add($body = [])
    {
        return $this->config->post('/webhooks/add', $body);
    }
    /**
     * Delete webhook
     * Delete an existing webhook.
     */
    public function delete($body = [])
    {
        return $this->config->post('/webhooks/delete', $body);
    }
    /**
     * Get webhook info
     * Given the ID of an existing webhook, return the data about it.
     */
    public function info($body = [])
    {
        return $this->config->post('/webhooks/info', $body);
    }
    /**
     * List webhooks
     * Get the list of all webhooks defined on the account.
     */
    public function list($body = [])
    {
        return $this->config->post('/webhooks/list', $body);
    }
    /**
     * Update webhook
     * Update an existing webhook.
     */
    public function update($body = [])
    {
        return $this->config->post('/webhooks/update', $body);
    }
}
