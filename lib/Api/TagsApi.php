<?php

/**
 * TagsApi
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
 * TagsApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TagsApi
{
    protected $Configuration;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * View all tags history
     * Return the recent history (hourly stats for the last 30 days) for all tags.
     */
    public function allTimeSeries($body = [])
    {
        return $this->config->post('/tags/all-time-series', $body);
    }
    /**
     * Delete tag
     * Deletes a tag permanently. Deleting a tag removes the tag from any messages that have been sent, and also deletes the tag&#39;s stats. There is no way to undo this operation, so use it carefully.
     */
    public function delete($body = [])
    {
        return $this->config->post('/tags/delete', $body);
    }
    /**
     * Get tag info
     * Return more detailed information about a single tag, including aggregates of recent stats.
     */
    public function info($body = [])
    {
        return $this->config->post('/tags/info', $body);
    }
    /**
     * List tags
     * Return all of the user-defined tag information.
     */
    public function list($body = [])
    {
        return $this->config->post('/tags/list', $body);
    }
    /**
     * View tag history
     * Return the recent history (hourly stats for the last 30 days) for a tag.
     */
    public function timeSeries($body = [])
    {
        return $this->config->post('/tags/time-series', $body);
    }
}
