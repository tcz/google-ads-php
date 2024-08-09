<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/campaign_aggregate_asset_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class CampaignAggregateAssetView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
1google/ads/googleads/v17/enums/asset_source.protogoogle.ads.googleads.v17.enums"i
AssetSourceEnum"V
AssetSource
UNSPECIFIED 
UNKNOWN

ADVERTISER
AUTOMATICALLY_CREATEDB�
"com.google.ads.googleads.v17.enumsBAssetSourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
5google/ads/googleads/v17/enums/asset_field_type.protogoogle.ads.googleads.v17.enums"�
AssetFieldTypeEnum"�
AssetFieldType
UNSPECIFIED 
UNKNOWN
HEADLINE
DESCRIPTION
MANDATORY_AD_TEXT
MARKETING_IMAGE
MEDIA_BUNDLE
YOUTUBE_VIDEO
BOOK_ON_GOOGLE
	LEAD_FORM	
	PROMOTION

CALLOUT
STRUCTURED_SNIPPET
SITELINK

MOBILE_APP
HOTEL_CALLOUT
CALL	
PRICE
LONG_HEADLINE
BUSINESS_NAME
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO	
VIDEO
CALL_TO_ACTION_SELECTION
AD_IMAGE
BUSINESS_LOGO
HOTEL_PROPERTY
DEMAND_GEN_CAROUSEL_CARDB�
"com.google.ads.googleads.v17.enumsBAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�	
Fgoogle/ads/googleads/v17/resources/campaign_aggregate_asset_view.proto"google.ads.googleads.v17.resources1google/ads/googleads/v17/enums/asset_source.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignAggregateAssetViewR
resource_name (	B;�A�A5
3googleads.googleapis.com/CampaignAggregateAssetView@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH �:
asset (	B&�A�A 
googleads.googleapis.com/AssetH�[
asset_source (2;.google.ads.googleads.v17.enums.AssetSourceEnum.AssetSourceB�AH�_

field_type (2A.google.ads.googleads.v17.enums.AssetFieldTypeEnum.AssetFieldTypeB�AH�:��A�
3googleads.googleapis.com/CampaignAggregateAssetViewmcustomers/{customer_id}/campaignAggregateAssetViews/{campaign_id}~{asset_id}~{asset_link_source}~{field_type}B
	_campaignB
_assetB
_asset_sourceB
_field_typeB�
&com.google.ads.googleads.v17.resourcesBCampaignAggregateAssetViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

