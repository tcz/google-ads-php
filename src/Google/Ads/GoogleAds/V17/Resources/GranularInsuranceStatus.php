<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/customer.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Insurance status at geo + vertical level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.GranularInsuranceStatus</code>
 */
class GranularInsuranceStatus extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Geotarget criterion ID associated with the status. Can be on
     * country or state/province geo level, depending on requirements and
     * location. See https://developers.google.com/google-ads/api/data/geotargets
     * for more information.
     *
     * Generated from protobuf field <code>optional int64 geo_criterion_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $geo_criterion_id = null;
    /**
     * Output only. Service category associated with the status. For example,
     * xcat:service_area_business_plumber.
     * For more details see:
     * https://developers.google.com/google-ads/api/data/codes-formats#local_services_ids
     *
     * Generated from protobuf field <code>optional string category_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $category_id = null;
    /**
     * Output only. Granular insurance status, per geo + vertical.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.enums.LocalServicesVerificationStatusEnum.LocalServicesVerificationStatus verification_status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $verification_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $geo_criterion_id
     *           Output only. Geotarget criterion ID associated with the status. Can be on
     *           country or state/province geo level, depending on requirements and
     *           location. See https://developers.google.com/google-ads/api/data/geotargets
     *           for more information.
     *     @type string $category_id
     *           Output only. Service category associated with the status. For example,
     *           xcat:service_area_business_plumber.
     *           For more details see:
     *           https://developers.google.com/google-ads/api/data/codes-formats#local_services_ids
     *     @type int $verification_status
     *           Output only. Granular insurance status, per geo + vertical.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Geotarget criterion ID associated with the status. Can be on
     * country or state/province geo level, depending on requirements and
     * location. See https://developers.google.com/google-ads/api/data/geotargets
     * for more information.
     *
     * Generated from protobuf field <code>optional int64 geo_criterion_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getGeoCriterionId()
    {
        return isset($this->geo_criterion_id) ? $this->geo_criterion_id : 0;
    }

    public function hasGeoCriterionId()
    {
        return isset($this->geo_criterion_id);
    }

    public function clearGeoCriterionId()
    {
        unset($this->geo_criterion_id);
    }

    /**
     * Output only. Geotarget criterion ID associated with the status. Can be on
     * country or state/province geo level, depending on requirements and
     * location. See https://developers.google.com/google-ads/api/data/geotargets
     * for more information.
     *
     * Generated from protobuf field <code>optional int64 geo_criterion_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setGeoCriterionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->geo_criterion_id = $var;

        return $this;
    }

    /**
     * Output only. Service category associated with the status. For example,
     * xcat:service_area_business_plumber.
     * For more details see:
     * https://developers.google.com/google-ads/api/data/codes-formats#local_services_ids
     *
     * Generated from protobuf field <code>optional string category_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCategoryId()
    {
        return isset($this->category_id) ? $this->category_id : '';
    }

    public function hasCategoryId()
    {
        return isset($this->category_id);
    }

    public function clearCategoryId()
    {
        unset($this->category_id);
    }

    /**
     * Output only. Service category associated with the status. For example,
     * xcat:service_area_business_plumber.
     * For more details see:
     * https://developers.google.com/google-ads/api/data/codes-formats#local_services_ids
     *
     * Generated from protobuf field <code>optional string category_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCategoryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->category_id = $var;

        return $this;
    }

    /**
     * Output only. Granular insurance status, per geo + vertical.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.enums.LocalServicesVerificationStatusEnum.LocalServicesVerificationStatus verification_status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getVerificationStatus()
    {
        return isset($this->verification_status) ? $this->verification_status : 0;
    }

    public function hasVerificationStatus()
    {
        return isset($this->verification_status);
    }

    public function clearVerificationStatus()
    {
        unset($this->verification_status);
    }

    /**
     * Output only. Granular insurance status, per geo + vertical.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v17.enums.LocalServicesVerificationStatusEnum.LocalServicesVerificationStatus verification_status = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setVerificationStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\LocalServicesVerificationStatusEnum\LocalServicesVerificationStatus::class);
        $this->verification_status = $var;

        return $this;
    }

}

