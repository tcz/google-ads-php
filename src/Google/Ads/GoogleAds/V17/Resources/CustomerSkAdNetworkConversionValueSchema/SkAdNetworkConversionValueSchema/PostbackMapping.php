<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/customer_sk_ad_network_conversion_value_schema.proto

namespace Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mappings for each postback in multiple conversion windows.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.PostbackMapping</code>
 */
class PostbackMapping extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. 0-based index that indicates the order of postback. Valid
     * values are in the inclusive range [0,2].
     *
     * Generated from protobuf field <code>int32 postback_sequence_index = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $postback_sequence_index = 0;
    /**
     * Output only. Conversion value mappings for all coarse grained
     * conversion values.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.CoarseGrainedConversionValueMappings coarse_grained_conversion_value_mappings = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $coarse_grained_conversion_value_mappings = null;
    protected $lock_window_trigger;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $postback_sequence_index
     *           Output only. 0-based index that indicates the order of postback. Valid
     *           values are in the inclusive range [0,2].
     *     @type \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\CoarseGrainedConversionValueMappings $coarse_grained_conversion_value_mappings
     *           Output only. Conversion value mappings for all coarse grained
     *           conversion values.
     *     @type int $lock_window_coarse_conversion_value
     *           Output only. Coarse grained conversion value that triggers conversion
     *           window lock.
     *     @type int $lock_window_fine_conversion_value
     *           Output only. Fine grained conversion value that triggers conversion
     *           window lock.
     *     @type string $lock_window_event
     *           Output only. Event name that triggers conversion window lock.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. 0-based index that indicates the order of postback. Valid
     * values are in the inclusive range [0,2].
     *
     * Generated from protobuf field <code>int32 postback_sequence_index = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPostbackSequenceIndex()
    {
        return $this->postback_sequence_index;
    }

    /**
     * Output only. 0-based index that indicates the order of postback. Valid
     * values are in the inclusive range [0,2].
     *
     * Generated from protobuf field <code>int32 postback_sequence_index = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPostbackSequenceIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->postback_sequence_index = $var;

        return $this;
    }

    /**
     * Output only. Conversion value mappings for all coarse grained
     * conversion values.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.CoarseGrainedConversionValueMappings coarse_grained_conversion_value_mappings = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\CoarseGrainedConversionValueMappings|null
     */
    public function getCoarseGrainedConversionValueMappings()
    {
        return $this->coarse_grained_conversion_value_mappings;
    }

    public function hasCoarseGrainedConversionValueMappings()
    {
        return isset($this->coarse_grained_conversion_value_mappings);
    }

    public function clearCoarseGrainedConversionValueMappings()
    {
        unset($this->coarse_grained_conversion_value_mappings);
    }

    /**
     * Output only. Conversion value mappings for all coarse grained
     * conversion values.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.CoarseGrainedConversionValueMappings coarse_grained_conversion_value_mappings = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\CoarseGrainedConversionValueMappings $var
     * @return $this
     */
    public function setCoarseGrainedConversionValueMappings($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\CoarseGrainedConversionValueMappings::class);
        $this->coarse_grained_conversion_value_mappings = $var;

        return $this;
    }

    /**
     * Output only. Coarse grained conversion value that triggers conversion
     * window lock.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.SkAdNetworkCoarseConversionValueEnum.SkAdNetworkCoarseConversionValue lock_window_coarse_conversion_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLockWindowCoarseConversionValue()
    {
        return $this->readOneof(3);
    }

    public function hasLockWindowCoarseConversionValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Output only. Coarse grained conversion value that triggers conversion
     * window lock.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.SkAdNetworkCoarseConversionValueEnum.SkAdNetworkCoarseConversionValue lock_window_coarse_conversion_value = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLockWindowCoarseConversionValue($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\SkAdNetworkCoarseConversionValueEnum\SkAdNetworkCoarseConversionValue::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Output only. Fine grained conversion value that triggers conversion
     * window lock.
     *
     * Generated from protobuf field <code>int32 lock_window_fine_conversion_value = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getLockWindowFineConversionValue()
    {
        return $this->readOneof(4);
    }

    public function hasLockWindowFineConversionValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * Output only. Fine grained conversion value that triggers conversion
     * window lock.
     *
     * Generated from protobuf field <code>int32 lock_window_fine_conversion_value = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setLockWindowFineConversionValue($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. Event name that triggers conversion window lock.
     *
     * Generated from protobuf field <code>string lock_window_event = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLockWindowEvent()
    {
        return $this->readOneof(5);
    }

    public function hasLockWindowEvent()
    {
        return $this->hasOneof(5);
    }

    /**
     * Output only. Event name that triggers conversion window lock.
     *
     * Generated from protobuf field <code>string lock_window_event = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLockWindowEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getLockWindowTrigger()
    {
        return $this->whichOneof("lock_window_trigger");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PostbackMapping::class, \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema_SkAdNetworkConversionValueSchema_PostbackMapping::class);

