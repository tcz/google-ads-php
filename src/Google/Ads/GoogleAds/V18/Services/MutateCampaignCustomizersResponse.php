<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/campaign_customizer_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for a campaign customizer mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.MutateCampaignCustomizersResponse</code>
 */
class MutateCampaignCustomizersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.MutateCampaignCustomizerResult results = 1;</code>
     */
    private $results;
    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     */
    protected $partial_failure_error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V18\Services\MutateCampaignCustomizerResult>|\Google\Protobuf\Internal\RepeatedField $results
     *           All results for the mutate.
     *     @type \Google\Rpc\Status $partial_failure_error
     *           Errors that pertain to operation failures in the partial failure mode.
     *           Returned only when partial_failure = true and all errors occur inside the
     *           operations. If any errors occur outside the operations (for example, auth
     *           errors), we return an RPC level error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\CampaignCustomizerService::initOnce();
        parent::__construct($data);
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.MutateCampaignCustomizerResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * All results for the mutate.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v18.services.MutateCampaignCustomizerResult results = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V18\Services\MutateCampaignCustomizerResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V18\Services\MutateCampaignCustomizerResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getPartialFailureError()
    {
        return $this->partial_failure_error;
    }

    public function hasPartialFailureError()
    {
        return isset($this->partial_failure_error);
    }

    public function clearPartialFailureError()
    {
        unset($this->partial_failure_error);
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (for example, auth
     * errors), we return an RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setPartialFailureError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->partial_failure_error = $var;

        return $this;
    }

}

