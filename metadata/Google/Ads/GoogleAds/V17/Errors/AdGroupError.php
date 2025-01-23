<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/ad_group_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class AdGroupError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v17/errors/ad_group_error.protogoogle.ads.googleads.v17.errors"�
AdGroupErrorEnum"�
AdGroupError
UNSPECIFIED 
UNKNOWN
DUPLICATE_ADGROUP_NAME
INVALID_ADGROUP_NAME%
!ADVERTISER_NOT_ON_CONTENT_NETWORK
BID_TOO_BIG*
&BID_TYPE_AND_BIDDING_STRATEGY_MISMATCH
MISSING_ADGROUP_NAME 
ADGROUP_LABEL_DOES_NOT_EXIST	 
ADGROUP_LABEL_ALREADY_EXISTS
,
(INVALID_CONTENT_BID_CRITERION_TYPE_GROUP8
4AD_GROUP_TYPE_NOT_VALID_FOR_ADVERTISING_CHANNEL_TYPE9
5ADGROUP_TYPE_NOT_SUPPORTED_FOR_CAMPAIGN_SALES_COUNTRYB
>CANNOT_ADD_ADGROUP_OF_TYPE_DSA_TO_CAMPAIGN_WITHOUT_DSA_SETTING7
3PROMOTED_HOTEL_AD_GROUPS_NOT_AVAILABLE_FOR_CUSTOMER,
(INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE*
&INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE)
%CANNOT_ADD_AD_GROUP_FOR_CAMPAIGN_TYPE
INVALID_STATUSB�
#com.google.ads.googleads.v17.errorsBAdGroupErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

