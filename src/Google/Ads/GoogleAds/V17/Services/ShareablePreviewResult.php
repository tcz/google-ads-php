<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/shareable_preview_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message to hold a shareable preview result.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.ShareablePreviewResult</code>
 */
class ShareablePreviewResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The shareable preview URL.
     *
     * Generated from protobuf field <code>string shareable_preview_url = 1;</code>
     */
    protected $shareable_preview_url = '';
    /**
     * Expiration date time using the ISO-8601 format.
     *
     * Generated from protobuf field <code>string expiration_date_time = 2;</code>
     */
    protected $expiration_date_time = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $shareable_preview_url
     *           The shareable preview URL.
     *     @type string $expiration_date_time
     *           Expiration date time using the ISO-8601 format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ShareablePreviewService::initOnce();
        parent::__construct($data);
    }

    /**
     * The shareable preview URL.
     *
     * Generated from protobuf field <code>string shareable_preview_url = 1;</code>
     * @return string
     */
    public function getShareablePreviewUrl()
    {
        return $this->shareable_preview_url;
    }

    /**
     * The shareable preview URL.
     *
     * Generated from protobuf field <code>string shareable_preview_url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setShareablePreviewUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->shareable_preview_url = $var;

        return $this;
    }

    /**
     * Expiration date time using the ISO-8601 format.
     *
     * Generated from protobuf field <code>string expiration_date_time = 2;</code>
     * @return string
     */
    public function getExpirationDateTime()
    {
        return $this->expiration_date_time;
    }

    /**
     * Expiration date time using the ISO-8601 format.
     *
     * Generated from protobuf field <code>string expiration_date_time = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExpirationDateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->expiration_date_time = $var;

        return $this;
    }

}

