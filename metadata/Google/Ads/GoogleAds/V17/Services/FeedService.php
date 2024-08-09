<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/feed_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class FeedService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Ngoogle/ads/googleads/v17/enums/affiliate_location_feed_relationship_type.protogoogle.ads.googleads.v17.enums"�
)AffiliateLocationFeedRelationshipTypeEnum"[
%AffiliateLocationFeedRelationshipType
UNSPECIFIED 
UNKNOWN
GENERAL_RETAILERB�
"com.google.ads.googleads.v17.enumsB*AffiliateLocationFeedRelationshipTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
0google/ads/googleads/v17/enums/feed_status.protogoogle.ads.googleads.v17.enums"V
FeedStatusEnum"D

FeedStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v17.enumsBFeedStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
8google/ads/googleads/v17/enums/feed_attribute_type.protogoogle.ads.googleads.v17.enums"�
FeedAttributeTypeEnum"�
FeedAttributeType
UNSPECIFIED 
UNKNOWN	
INT64

DOUBLE

STRING
BOOLEAN
URL
	DATE_TIME

INT64_LIST
DOUBLE_LIST	
STRING_LIST

BOOLEAN_LIST
URL_LIST
DATE_TIME_LIST	
PRICEB�
"com.google.ads.googleads.v17.enumsBFeedAttributeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
0google/ads/googleads/v17/enums/feed_origin.protogoogle.ads.googleads.v17.enums"R
FeedOriginEnum"@

FeedOrigin
UNSPECIFIED 
UNKNOWN
USER

GOOGLEB�
"com.google.ads.googleads.v17.enumsBFeedOriginProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
-google/ads/googleads/v17/resources/feed.proto"google.ads.googleads.v17.resources8google/ads/googleads/v17/enums/feed_attribute_type.proto0google/ads/googleads/v17/enums/feed_origin.proto0google/ads/googleads/v17/enums/feed_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
Feed<
resource_name (	B%�A�A
googleads.googleapis.com/Feed
id (B�AH�
name (	B�AH�E

attributes (21.google.ads.googleads.v17.resources.FeedAttributeX
attribute_operations	 (2:.google.ads.googleads.v17.resources.FeedAttributeOperationN
origin (29.google.ads.googleads.v17.enums.FeedOriginEnum.FeedOriginB�AN
status (29.google.ads.googleads.v17.enums.FeedStatusEnum.FeedStatusB�Ad
places_location_feed_data (2?.google.ads.googleads.v17.resources.Feed.PlacesLocationFeedDataH j
affiliate_location_feed_data (2B.google.ads.googleads.v17.resources.Feed.AffiliateLocationFeedDataH �
PlacesLocationFeedDatab

oauth_info (2I.google.ads.googleads.v17.resources.Feed.PlacesLocationFeedData.OAuthInfoB�A
email_address (	H �
business_account_id (	!
business_name_filter	 (	H�
category_filters (	
label_filters (	�
	OAuthInfo
http_method (	H �
http_request_url (	H�&
http_authorization_header (	H�B
_http_methodB
_http_request_urlB
_http_authorization_headerB
_email_addressB
_business_name_filter�
AffiliateLocationFeedData
	chain_ids (�
relationship_type (2o.google.ads.googleads.v17.enums.AffiliateLocationFeedRelationshipTypeEnum.AffiliateLocationFeedRelationshipType:K�AH
googleads.googleapis.com/Feed\'customers/{customer_id}/feeds/{feed_id}B
system_feed_generation_dataB
_idB
_name"�
FeedAttribute
id (H �
name (	H�U
type (2G.google.ads.googleads.v17.enums.FeedAttributeTypeEnum.FeedAttributeType
is_part_of_key (H�B
_idB
_nameB
_is_part_of_key"�
FeedAttributeOperationZ
operator (2C.google.ads.googleads.v17.resources.FeedAttributeOperation.OperatorB�AE
value (21.google.ads.googleads.v17.resources.FeedAttributeB�A"1
Operator
UNSPECIFIED 
UNKNOWN
ADDB�
&com.google.ads.googleads.v17.resourcesB	FeedProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3
�
:google/ads/googleads/v17/enums/response_content_type.protogoogle.ads.googleads.v17.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v17.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
4google/ads/googleads/v17/services/feed_service.proto!google.ads.googleads.v17.services-google/ads/googleads/v17/resources/feed.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateFeedsRequest
customer_id (	B�AI

operations (20.google.ads.googleads.v17.services.FeedOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v17.enums.ResponseContentTypeEnum.ResponseContentType"�
FeedOperation/
update_mask (2.google.protobuf.FieldMask:
create (2(.google.ads.googleads.v17.resources.FeedH :
update (2(.google.ads.googleads.v17.resources.FeedH 4
remove (	B"�A
googleads.googleapis.com/FeedH B
	operation"�
MutateFeedsResponse1
partial_failure_error (2.google.rpc.StatusD
results (23.google.ads.googleads.v17.services.MutateFeedResult"�
MutateFeedResult9
resource_name (	B"�A
googleads.googleapis.com/Feed6
feed (2(.google.ads.googleads.v17.resources.Feed2�
FeedService�
MutateFeeds5.google.ads.googleads.v17.services.MutateFeedsRequest6.google.ads.googleads.v17.services.MutateFeedsResponse"O�Acustomer_id,operations���0"+/v17/customers/{customer_id=*}/feeds:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesBFeedServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

