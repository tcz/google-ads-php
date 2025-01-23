<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/customer_sk_ad_network_conversion_value_schema.proto

namespace Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mappings for coarse grained conversion values.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.CoarseGrainedConversionValueMappings</code>
 */
class CoarseGrainedConversionValueMappings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Mapping for "low" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping low_conversion_value_mapping = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $low_conversion_value_mapping = null;
    /**
     * Output only. Mapping for "medium" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping medium_conversion_value_mapping = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $medium_conversion_value_mapping = null;
    /**
     * Output only. Mapping for "high" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping high_conversion_value_mapping = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $high_conversion_value_mapping = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping $low_conversion_value_mapping
     *           Output only. Mapping for "low" coarse conversion value.
     *     @type \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping $medium_conversion_value_mapping
     *           Output only. Mapping for "medium" coarse conversion value.
     *     @type \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping $high_conversion_value_mapping
     *           Output only. Mapping for "high" coarse conversion value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Mapping for "low" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping low_conversion_value_mapping = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping|null
     */
    public function getLowConversionValueMapping()
    {
        return $this->low_conversion_value_mapping;
    }

    public function hasLowConversionValueMapping()
    {
        return isset($this->low_conversion_value_mapping);
    }

    public function clearLowConversionValueMapping()
    {
        unset($this->low_conversion_value_mapping);
    }

    /**
     * Output only. Mapping for "low" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping low_conversion_value_mapping = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping $var
     * @return $this
     */
    public function setLowConversionValueMapping($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping::class);
        $this->low_conversion_value_mapping = $var;

        return $this;
    }

    /**
     * Output only. Mapping for "medium" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping medium_conversion_value_mapping = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping|null
     */
    public function getMediumConversionValueMapping()
    {
        return $this->medium_conversion_value_mapping;
    }

    public function hasMediumConversionValueMapping()
    {
        return isset($this->medium_conversion_value_mapping);
    }

    public function clearMediumConversionValueMapping()
    {
        unset($this->medium_conversion_value_mapping);
    }

    /**
     * Output only. Mapping for "medium" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping medium_conversion_value_mapping = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping $var
     * @return $this
     */
    public function setMediumConversionValueMapping($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping::class);
        $this->medium_conversion_value_mapping = $var;

        return $this;
    }

    /**
     * Output only. Mapping for "high" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping high_conversion_value_mapping = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping|null
     */
    public function getHighConversionValueMapping()
    {
        return $this->high_conversion_value_mapping;
    }

    public function hasHighConversionValueMapping()
    {
        return isset($this->high_conversion_value_mapping);
    }

    public function clearHighConversionValueMapping()
    {
        unset($this->high_conversion_value_mapping);
    }

    /**
     * Output only. Mapping for "high" coarse conversion value.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.CustomerSkAdNetworkConversionValueSchema.SkAdNetworkConversionValueSchema.ConversionValueMapping high_conversion_value_mapping = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping $var
     * @return $this
     */
    public function setHighConversionValueMapping($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema\SkAdNetworkConversionValueSchema\ConversionValueMapping::class);
        $this->high_conversion_value_mapping = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CoarseGrainedConversionValueMappings::class, \Google\Ads\GoogleAds\V17\Resources\CustomerSkAdNetworkConversionValueSchema_SkAdNetworkConversionValueSchema_CoarseGrainedConversionValueMappings::class);

