<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/reach_plan_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Container for surfaces for a product. Surfaces refer to the available types
 * of ad inventories such as In-Feed, In-Stream, and Shorts.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.SurfaceTargeting</code>
 */
class SurfaceTargeting extends \Google\Protobuf\Internal\Message
{
    /**
     * List of surfaces available to target.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.ReachPlanSurfaceEnum.ReachPlanSurface surfaces = 1;</code>
     */
    private $surfaces;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $surfaces
     *           List of surfaces available to target.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\ReachPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of surfaces available to target.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.ReachPlanSurfaceEnum.ReachPlanSurface surfaces = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSurfaces()
    {
        return $this->surfaces;
    }

    /**
     * List of surfaces available to target.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v17.enums.ReachPlanSurfaceEnum.ReachPlanSurface surfaces = 1;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSurfaces($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V17\Enums\ReachPlanSurfaceEnum\ReachPlanSurface::class);
        $this->surfaces = $arr;

        return $this;
    }

}

