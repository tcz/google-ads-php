<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/campaign_shared_set.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class CampaignSharedSet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v17/enums/campaign_shared_set_status.protogoogle.ads.googleads.v17.enums"p
CampaignSharedSetStatusEnum"Q
CampaignSharedSetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v17.enumsBCampaignSharedSetStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
<google/ads/googleads/v17/resources/campaign_shared_set.proto"google.ads.googleads.v17.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignSharedSetI
resource_name (	B2�A�A,
*googleads.googleapis.com/CampaignSharedSet@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH �C

shared_set (	B*�A�A$
"googleads.googleapis.com/SharedSetH�h
status (2S.google.ads.googleads.v17.enums.CampaignSharedSetStatusEnum.CampaignSharedSetStatusB�A:y�Av
*googleads.googleapis.com/CampaignSharedSetHcustomers/{customer_id}/campaignSharedSets/{campaign_id}~{shared_set_id}B
	_campaignB
_shared_setB�
&com.google.ads.googleads.v17.resourcesBCampaignSharedSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

