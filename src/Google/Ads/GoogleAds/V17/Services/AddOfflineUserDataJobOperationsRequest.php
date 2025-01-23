<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/offline_user_data_job_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [OfflineUserDataJobService.AddOfflineUserDataJobOperations][google.ads.googleads.v17.services.OfflineUserDataJobService.AddOfflineUserDataJobOperations].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AddOfflineUserDataJobOperationsRequest</code>
 */
class AddOfflineUserDataJobOperationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the OfflineUserDataJob.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * True to enable partial failure for the offline user data job.
     *
     * Generated from protobuf field <code>optional bool enable_partial_failure = 4;</code>
     */
    protected $enable_partial_failure = null;
    /**
     * True to enable warnings for the offline user data job. When enabled, a
     * warning will not block the OfflineUserDataJobOperation, and will also
     * return warning messages about malformed field values.
     *
     * Generated from protobuf field <code>optional bool enable_warnings = 6;</code>
     */
    protected $enable_warnings = null;
    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.OfflineUserDataJobOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $operations;
    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     */
    protected $validate_only = false;

    /**
     * @param string                                                           $resourceName Required. The resource name of the OfflineUserDataJob.
     * @param \Google\Ads\GoogleAds\V17\Services\OfflineUserDataJobOperation[] $operations   Required. The list of operations to be done.
     *
     * @return \Google\Ads\GoogleAds\V17\Services\AddOfflineUserDataJobOperationsRequest
     *
     * @experimental
     */
    public static function build(string $resourceName, array $operations): self
    {
        return (new self())
            ->setResourceName($resourceName)
            ->setOperations($operations);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Required. The resource name of the OfflineUserDataJob.
     *     @type bool $enable_partial_failure
     *           True to enable partial failure for the offline user data job.
     *     @type bool $enable_warnings
     *           True to enable warnings for the offline user data job. When enabled, a
     *           warning will not block the OfflineUserDataJobOperation, and will also
     *           return warning messages about malformed field values.
     *     @type array<\Google\Ads\GoogleAds\V17\Services\OfflineUserDataJobOperation>|\Google\Protobuf\Internal\RepeatedField $operations
     *           Required. The list of operations to be done.
     *     @type bool $validate_only
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\OfflineUserDataJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the OfflineUserDataJob.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. The resource name of the OfflineUserDataJob.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * True to enable partial failure for the offline user data job.
     *
     * Generated from protobuf field <code>optional bool enable_partial_failure = 4;</code>
     * @return bool
     */
    public function getEnablePartialFailure()
    {
        return isset($this->enable_partial_failure) ? $this->enable_partial_failure : false;
    }

    public function hasEnablePartialFailure()
    {
        return isset($this->enable_partial_failure);
    }

    public function clearEnablePartialFailure()
    {
        unset($this->enable_partial_failure);
    }

    /**
     * True to enable partial failure for the offline user data job.
     *
     * Generated from protobuf field <code>optional bool enable_partial_failure = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnablePartialFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_partial_failure = $var;

        return $this;
    }

    /**
     * True to enable warnings for the offline user data job. When enabled, a
     * warning will not block the OfflineUserDataJobOperation, and will also
     * return warning messages about malformed field values.
     *
     * Generated from protobuf field <code>optional bool enable_warnings = 6;</code>
     * @return bool
     */
    public function getEnableWarnings()
    {
        return isset($this->enable_warnings) ? $this->enable_warnings : false;
    }

    public function hasEnableWarnings()
    {
        return isset($this->enable_warnings);
    }

    public function clearEnableWarnings()
    {
        unset($this->enable_warnings);
    }

    /**
     * True to enable warnings for the offline user data job. When enabled, a
     * warning will not block the OfflineUserDataJobOperation, and will also
     * return warning messages about malformed field values.
     *
     * Generated from protobuf field <code>optional bool enable_warnings = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableWarnings($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_warnings = $var;

        return $this;
    }

    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.OfflineUserDataJobOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * Required. The list of operations to be done.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.services.OfflineUserDataJobOperation operations = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<\Google\Ads\GoogleAds\V17\Services\OfflineUserDataJobOperation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V17\Services\OfflineUserDataJobOperation::class);
        $this->operations = $arr;

        return $this;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

