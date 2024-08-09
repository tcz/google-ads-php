<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/ad.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class Ad
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
�
Egoogle/ads/googleads/v17/enums/asset_link_primary_status_reason.protogoogle.ads.googleads.v17.enums"�
 AssetLinkPrimaryStatusReasonEnum"�
AssetLinkPrimaryStatusReason
UNSPECIFIED 
UNKNOWN
ASSET_LINK_PAUSED
ASSET_LINK_REMOVED
ASSET_DISAPPROVED
ASSET_UNDER_REVIEW
ASSET_APPROVED_LABELEDB�
"com.google.ads.googleads.v17.enumsB!AssetLinkPrimaryStatusReasonProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
9google/ads/googleads/v17/enums/policy_review_status.protogoogle.ads.googleads.v17.enums"�
PolicyReviewStatusEnum"�
PolicyReviewStatus
UNSPECIFIED 
UNKNOWN
REVIEW_IN_PROGRESS
REVIEWED
UNDER_APPEAL
ELIGIBLE_MAY_SERVEB�
"com.google.ads.googleads.v17.enumsBPolicyReviewStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Ygoogle/ads/googleads/v17/enums/policy_topic_evidence_destination_not_working_device.protogoogle.ads.googleads.v17.enums"�
2PolicyTopicEvidenceDestinationNotWorkingDeviceEnum"q
.PolicyTopicEvidenceDestinationNotWorkingDevice
UNSPECIFIED 
UNKNOWN
DESKTOP
ANDROID
IOSB�
"com.google.ads.googleads.v17.enumsB3PolicyTopicEvidenceDestinationNotWorkingDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Bgoogle/ads/googleads/v17/enums/app_url_operating_system_type.protogoogle.ads.googleads.v17.enums"p
AppUrlOperatingSystemTypeEnum"O
AppUrlOperatingSystemType
UNSPECIFIED 
UNKNOWN
IOS
ANDROIDB�
"com.google.ads.googleads.v17.enumsBAppUrlOperatingSystemTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
3google/ads/googleads/v17/common/final_app_url.protogoogle.ads.googleads.v17.common"�
FinalAppUrlh
os_type (2W.google.ads.googleads.v17.enums.AppUrlOperatingSystemTypeEnum.AppUrlOperatingSystemType
url (	H �B
_urlB�
#com.google.ads.googleads.v17.commonBFinalAppUrlProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
;google/ads/googleads/v17/enums/policy_approval_status.protogoogle.ads.googleads.v17.enums"�
PolicyApprovalStatusEnum"�
PolicyApprovalStatus
UNSPECIFIED 
UNKNOWN
DISAPPROVED
APPROVED_LIMITED
APPROVED
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v17.enumsBPolicyApprovalStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Dgoogle/ads/googleads/v17/enums/call_conversion_reporting_state.protogoogle.ads.googleads.v17.enums"�
 CallConversionReportingStateEnum"�
CallConversionReportingState
UNSPECIFIED 
UNKNOWN
DISABLED,
(USE_ACCOUNT_LEVEL_CALL_CONVERSION_ACTION-
)USE_RESOURCE_LEVEL_CALL_CONVERSION_ACTIONB�
"com.google.ads.googleads.v17.enumsB!CallConversionReportingStateProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Dgoogle/ads/googleads/v17/enums/legacy_app_install_ad_app_store.protogoogle.ads.googleads.v17.enums"�
LegacyAppInstallAdAppStoreEnum"�
LegacyAppInstallAdAppStore
UNSPECIFIED 
UNKNOWN
APPLE_APP_STORE
GOOGLE_PLAY
WINDOWS_STORE
WINDOWS_PHONE_STORE
CN_APP_STOREB�
"com.google.ads.googleads.v17.enumsBLegacyAppInstallAdAppStoreProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Xgoogle/ads/googleads/v17/enums/policy_topic_evidence_destination_mismatch_url_type.protogoogle.ads.googleads.v17.enums"�
1PolicyTopicEvidenceDestinationMismatchUrlTypeEnum"�
-PolicyTopicEvidenceDestinationMismatchUrlType
UNSPECIFIED 
UNKNOWN
DISPLAY_URL
	FINAL_URL
FINAL_MOBILE_URL
TRACKING_URL
MOBILE_TRACKING_URLB�
"com.google.ads.googleads.v17.enumsB2PolicyTopicEvidenceDestinationMismatchUrlTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
<google/ads/googleads/v17/enums/asset_performance_label.protogoogle.ads.googleads.v17.enums"�
AssetPerformanceLabelEnum"m
AssetPerformanceLabel
UNSPECIFIED 
UNKNOWN
PENDING
LEARNING
LOW
GOOD
BESTB�
"com.google.ads.googleads.v17.enumsBAssetPerformanceLabelProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
>google/ads/googleads/v17/enums/asset_link_primary_status.protogoogle.ads.googleads.v17.enums"�
AssetLinkPrimaryStatusEnum"�
AssetLinkPrimaryStatus
UNSPECIFIED 
UNKNOWN
ELIGIBLE

PAUSED
REMOVED
PENDING
LIMITED
NOT_ELIGIBLEB�
"com.google.ads.googleads.v17.enumsBAssetLinkPrimaryStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
@google/ads/googleads/v17/enums/display_upload_product_type.protogoogle.ads.googleads.v17.enums"�
DisplayUploadProductTypeEnum"�
DisplayUploadProductType
UNSPECIFIED 
UNKNOWN
HTML5_UPLOAD_AD
DYNAMIC_HTML5_EDUCATION_AD
DYNAMIC_HTML5_FLIGHT_AD!
DYNAMIC_HTML5_HOTEL_RENTAL_AD
DYNAMIC_HTML5_JOB_AD
DYNAMIC_HTML5_LOCAL_AD 
DYNAMIC_HTML5_REAL_ESTATE_AD
DYNAMIC_HTML5_CUSTOM_AD	
DYNAMIC_HTML5_TRAVEL_AD

DYNAMIC_HTML5_HOTEL_ADB�
"com.google.ads.googleads.v17.enumsBDisplayUploadProductTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
.google/ads/googleads/v17/enums/mime_type.protogoogle.ads.googleads.v17.enums"�
MimeTypeEnum"�
MimeType
UNSPECIFIED 
UNKNOWN

IMAGE_JPEG
	IMAGE_GIF
	IMAGE_PNG	
FLASH
	TEXT_HTML
PDF

MSWORD
MSEXCEL	
RTF

	AUDIO_WAV
	AUDIO_MP3
HTML5_AD_ZIPB�
"com.google.ads.googleads.v17.enumsBMimeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
agoogle/ads/googleads/v17/enums/policy_topic_evidence_destination_not_working_dns_error_type.protogoogle.ads.googleads.v17.enums"�
8PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum"�
4PolicyTopicEvidenceDestinationNotWorkingDnsErrorType
UNSPECIFIED 
UNKNOWN
HOSTNAME_NOT_FOUND
GOOGLE_CRAWLER_DNS_ISSUEB�
"com.google.ads.googleads.v17.enumsB9PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
6google/ads/googleads/v17/common/custom_parameter.protogoogle.ads.googleads.v17.common"I
CustomParameter
key (	H �
value (	H�B
_keyB
_valueB�
#com.google.ads.googleads.v17.commonBCustomParameterProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
>google/ads/googleads/v17/enums/display_ad_format_setting.protogoogle.ads.googleads.v17.enums"�
DisplayAdFormatSettingEnum"c
DisplayAdFormatSetting
UNSPECIFIED 
UNKNOWN
ALL_FORMATS

NON_NATIVE

NATIVEB�
"com.google.ads.googleads.v17.enumsBDisplayAdFormatSettingProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
<google/ads/googleads/v17/enums/policy_topic_entry_type.protogoogle.ads.googleads.v17.enums"�
PolicyTopicEntryTypeEnum"�
PolicyTopicEntryType
UNSPECIFIED 
UNKNOWN

PROHIBITED
LIMITED
FULLY_LIMITED
DESCRIPTIVE

BROADENING
AREA_OF_INTEREST_ONLYB�
"com.google.ads.googleads.v17.enumsBPolicyTopicEntryTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
,google/ads/googleads/v17/common/policy.protogoogle.ads.googleads.v17.commonXgoogle/ads/googleads/v17/enums/policy_topic_evidence_destination_mismatch_url_type.protoYgoogle/ads/googleads/v17/enums/policy_topic_evidence_destination_not_working_device.protoagoogle/ads/googleads/v17/enums/policy_topic_evidence_destination_not_working_dns_error_type.proto"n
PolicyViolationKey
policy_name (	H �
violating_text (	H�B
_policy_nameB
_violating_text"�
PolicyValidationParameter
ignorable_policy_topics (	Y
exempt_policy_violation_keys (23.google.ads.googleads.v17.common.PolicyViolationKey"�
PolicyTopicEntry
topic (	H �[
type (2M.google.ads.googleads.v17.enums.PolicyTopicEntryTypeEnum.PolicyTopicEntryTypeG
	evidences (24.google.ads.googleads.v17.common.PolicyTopicEvidenceK
constraints (26.google.ads.googleads.v17.common.PolicyTopicConstraintB
_topic"�

PolicyTopicEvidenceX
website_list (2@.google.ads.googleads.v17.common.PolicyTopicEvidence.WebsiteListH R
	text_list (2=.google.ads.googleads.v17.common.PolicyTopicEvidence.TextListH 
language_code	 (	H i
destination_text_list (2H.google.ads.googleads.v17.common.PolicyTopicEvidence.DestinationTextListH h
destination_mismatch (2H.google.ads.googleads.v17.common.PolicyTopicEvidence.DestinationMismatchH m
destination_not_working (2J.google.ads.googleads.v17.common.PolicyTopicEvidence.DestinationNotWorkingH 
TextList
texts (	
WebsiteList
websites (	0
DestinationTextList
destination_texts (	�
DestinationMismatch�
	url_types (2.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationMismatchUrlTypeEnum.PolicyTopicEvidenceDestinationMismatchUrlType�
DestinationNotWorking
expanded_url (	H��
device (2�.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationNotWorkingDeviceEnum.PolicyTopicEvidenceDestinationNotWorkingDevice#
last_checked_date_time (	H��
dns_error_type (2�.google.ads.googleads.v17.enums.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeEnum.PolicyTopicEvidenceDestinationNotWorkingDnsErrorTypeH 
http_error_code (H B
reasonB
_expanded_urlB
_last_checked_date_timeB
value"�
PolicyTopicConstrainto
country_constraint_list (2L.google.ads.googleads.v17.common.PolicyTopicConstraint.CountryConstraintListH h
reseller_constraint (2I.google.ads.googleads.v17.common.PolicyTopicConstraint.ResellerConstraintH {
#certificate_missing_in_country_list (2L.google.ads.googleads.v17.common.PolicyTopicConstraint.CountryConstraintListH �
+certificate_domain_mismatch_in_country_list (2L.google.ads.googleads.v17.common.PolicyTopicConstraint.CountryConstraintListH �
CountryConstraintList%
total_targeted_countries (H �[
	countries (2H.google.ads.googleads.v17.common.PolicyTopicConstraint.CountryConstraintB
_total_targeted_countries
ResellerConstraintI
CountryConstraint
country_criterion (	H �B
_country_criterionB
valueB�
#com.google.ads.googleads.v17.commonBPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
4google/ads/googleads/v17/enums/video_thumbnail.protogoogle.ads.googleads.v17.enums"�
VideoThumbnailEnum"x
VideoThumbnail
UNSPECIFIED 
UNKNOWN
DEFAULT_THUMBNAIL
THUMBNAIL_1
THUMBNAIL_2
THUMBNAIL_3B�
"com.google.ads.googleads.v17.enumsBVideoThumbnailProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Kgoogle/ads/googleads/v17/enums/asset_offline_evaluation_error_reasons.protogoogle.ads.googleads.v17.enums"�
&AssetOfflineEvaluationErrorReasonsEnum"�
"AssetOfflineEvaluationErrorReasons
UNSPECIFIED 
UNKNOWN.
*PRICE_ASSET_DESCRIPTION_REPEATS_ROW_HEADER"
PRICE_ASSET_REPETITIVE_HEADERS3
/PRICE_ASSET_HEADER_INCOMPATIBLE_WITH_PRICE_TYPE9
5PRICE_ASSET_DESCRIPTION_INCOMPATIBLE_WITH_ITEM_HEADER/
+PRICE_ASSET_DESCRIPTION_HAS_PRICE_QUALIFIER$
 PRICE_ASSET_UNSUPPORTED_LANGUAGE
PRICE_ASSET_OTHER_ERRORB�
"com.google.ads.googleads.v17.enumsB\'AssetOfflineEvaluationErrorReasonsProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
2google/ads/googleads/v17/common/asset_policy.protogoogle.ads.googleads.v17.common>google/ads/googleads/v17/enums/asset_link_primary_status.protoEgoogle/ads/googleads/v17/enums/asset_link_primary_status_reason.protoKgoogle/ads/googleads/v17/enums/asset_offline_evaluation_error_reasons.proto;google/ads/googleads/v17/enums/policy_approval_status.proto9google/ads/googleads/v17/enums/policy_review_status.proto"�
AdAssetPolicySummaryO
policy_topic_entries (21.google.ads.googleads.v17.common.PolicyTopicEntry`
review_status (2I.google.ads.googleads.v17.enums.PolicyReviewStatusEnum.PolicyReviewStatusf
approval_status (2M.google.ads.googleads.v17.enums.PolicyApprovalStatusEnum.PolicyApprovalStatus"�
AssetLinkPrimaryStatusDetailsr
reason (2].google.ads.googleads.v17.enums.AssetLinkPrimaryStatusReasonEnum.AssetLinkPrimaryStatusReasonH�f
status (2Q.google.ads.googleads.v17.enums.AssetLinkPrimaryStatusEnum.AssetLinkPrimaryStatusH�N
asset_disapproved (21.google.ads.googleads.v17.common.AssetDisapprovedH B	
detailsB	
_reasonB	
_status"�
AssetDisapproved�
 offline_evaluation_error_reasons (2i.google.ads.googleads.v17.enums.AssetOfflineEvaluationErrorReasonsEnum.AssetOfflineEvaluationErrorReasonsB�
#com.google.ads.googleads.v17.commonBAssetPolicyProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
4google/ads/googleads/v17/common/url_collection.protogoogle.ads.googleads.v17.common"�
UrlCollection
url_collection_id (	H �

final_urls (	
final_mobile_urls (	"
tracking_url_template (	H�B
_url_collection_idB
_tracking_url_templateB�
#com.google.ads.googleads.v17.commonBUrlCollectionProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
,google/ads/googleads/v17/enums/ad_type.protogoogle.ads.googleads.v17.enums"�

AdTypeEnum"�
AdType
UNSPECIFIED 
UNKNOWN
TEXT_AD
EXPANDED_TEXT_AD
EXPANDED_DYNAMIC_SEARCH_AD
HOTEL_AD
SHOPPING_SMART_AD	
SHOPPING_PRODUCT_AD

VIDEO_AD
IMAGE_AD
RESPONSIVE_SEARCH_AD 
LEGACY_RESPONSIVE_DISPLAY_AD

APP_AD
LEGACY_APP_INSTALL_AD
RESPONSIVE_DISPLAY_AD
LOCAL_AD
HTML5_UPLOAD_AD
DYNAMIC_HTML5_AD
APP_ENGAGEMENT_AD"
SHOPPING_COMPARISON_LISTING_AD
VIDEO_BUMPER_AD$
 VIDEO_NON_SKIPPABLE_IN_STREAM_AD
VIDEO_OUTSTREAM_AD
VIDEO_TRUEVIEW_IN_STREAM_AD
VIDEO_RESPONSIVE_AD
SMART_CAMPAIGN_AD
CALL_AD 
APP_PRE_REGISTRATION_AD!
IN_FEED_VIDEO_AD"
DEMAND_GEN_MULTI_ASSET_AD(
DEMAND_GEN_CAROUSEL_AD)
	TRAVEL_AD%"
DEMAND_GEN_VIDEO_RESPONSIVE_AD*
DEMAND_GEN_PRODUCT_AD\'B�
"com.google.ads.googleads.v17.enumsBAdTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
<google/ads/googleads/v17/enums/served_asset_field_type.protogoogle.ads.googleads.v17.enums"�
ServedAssetFieldTypeEnum"�
ServedAssetFieldType
UNSPECIFIED 
UNKNOWN

HEADLINE_1

HEADLINE_2

HEADLINE_3
DESCRIPTION_1
DESCRIPTION_2
HEADLINE
HEADLINE_IN_PORTRAIT
LONG_HEADLINE	
DESCRIPTION

DESCRIPTION_IN_PORTRAIT
BUSINESS_NAME_IN_PORTRAIT
BUSINESS_NAME
MARKETING_IMAGE
MARKETING_IMAGE_IN_PORTRAIT
SQUARE_MARKETING_IMAGE
PORTRAIT_MARKETING_IMAGE
LOGO
LANDSCAPE_LOGO
CALL_TO_ACTION
YOU_TUBE_VIDEO
SITELINK
CALL

MOBILE_APP
CALLOUT
STRUCTURED_SNIPPET	
PRICE
	PROMOTION
AD_IMAGE
	LEAD_FORM
BUSINESS_LOGOB�
"com.google.ads.googleads.v17.enumsBServedAssetFieldTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
.google/ads/googleads/v17/common/ad_asset.protogoogle.ads.googleads.v17.common<google/ads/googleads/v17/enums/asset_performance_label.proto<google/ads/googleads/v17/enums/served_asset_field_type.proto"�
AdTextAsset
text (	H �c
pinned_field (2M.google.ads.googleads.v17.enums.ServedAssetFieldTypeEnum.ServedAssetFieldTypep
asset_performance_label (2O.google.ads.googleads.v17.enums.AssetPerformanceLabelEnum.AssetPerformanceLabelR
policy_summary_info (25.google.ads.googleads.v17.common.AdAssetPolicySummaryB
_text",
AdImageAsset
asset (	H �B
_asset"�
AdVideoAsset
asset (	H �S
ad_video_asset_info (21.google.ads.googleads.v17.common.AdVideoAssetInfoH�B
_assetB
_ad_video_asset_info"�
AdVideoAssetInfot
$ad_video_asset_inventory_preferences (2A.google.ads.googleads.v17.common.AdVideoAssetInventoryPreferencesH �B\'
%_ad_video_asset_inventory_preferences"�
 AdVideoAssetInventoryPreferences
in_feed_preference (H �!
in_stream_preference (H�
shorts_preference (H�B
_in_feed_preferenceB
_in_stream_preferenceB
_shorts_preference"2
AdMediaBundleAsset
asset (	H �B
_asset"<
AdDemandGenCarouselCardAsset
asset (	H �B
_asset"3
AdCallToActionAsset
asset (	H �B
_assetB�
#com.google.ads.googleads.v17.commonBAdAssetProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�S
3google/ads/googleads/v17/common/ad_type_infos.protogoogle.ads.googleads.v17.commonDgoogle/ads/googleads/v17/enums/call_conversion_reporting_state.proto>google/ads/googleads/v17/enums/display_ad_format_setting.proto@google/ads/googleads/v17/enums/display_upload_product_type.protoDgoogle/ads/googleads/v17/enums/legacy_app_install_ad_app_store.proto.google/ads/googleads/v17/enums/mime_type.proto4google/ads/googleads/v17/enums/video_thumbnail.protogoogle/api/field_behavior.proto"�

TextAdInfo
headline (	H �
description1 (	H�
description2 (	H�B
	_headlineB
_description1B
_description2"�
ExpandedTextAdInfo
headline_part1 (	H �
headline_part2	 (	H�
headline_part3
 (	H�
description (	H�
description2 (	H�
path1 (	H�
path2 (	H�B
_headline_part1B
_headline_part2B
_headline_part3B
_descriptionB
_description2B
_path1B
_path2"s
ExpandedDynamicSearchAdInfo
description (	H �
description2 (	H�B
_descriptionB
_description2"
HotelAdInfo"
TravelAdInfo"
ShoppingSmartAdInfo"
ShoppingProductAdInfo"E
ShoppingComparisonListingAdInfo
headline (	H �B
	_headline"�
ImageAdInfo
pixel_width (H�
pixel_height (H�
	image_url (	H� 
preview_pixel_width (H�!
preview_pixel_height (H�
preview_image_url (	H�H
	mime_type
 (25.google.ads.googleads.v17.enums.MimeTypeEnum.MimeType
name (	H�D
image_asset (2-.google.ads.googleads.v17.common.AdImageAssetH 
data (H "
ad_id_to_copy_image_from (H B
imageB
_pixel_widthB
_pixel_heightB

_image_urlB
_preview_pixel_widthB
_preview_pixel_heightB
_preview_image_urlB
_name"�
VideoBumperInStreamAdInfoG
companion_banner (2-.google.ads.googleads.v17.common.AdImageAsset
action_button_label (	
action_headline (	"�
VideoNonSkippableInStreamAdInfoG
companion_banner (2-.google.ads.googleads.v17.common.AdImageAsset
action_button_label (	
action_headline (	"�
VideoTrueViewInStreamAdInfo
action_button_label (	
action_headline (	G
companion_banner (2-.google.ads.googleads.v17.common.AdImageAsset"=
VideoOutstreamAdInfo
headline (	
description (	"�
InFeedVideoAdInfo
headline (	
description1 (	
description2 (	T
	thumbnail (2A.google.ads.googleads.v17.enums.VideoThumbnailEnum.VideoThumbnail"�
VideoAdInfo<
video (2-.google.ads.googleads.v17.common.AdVideoAssetQ
	in_stream (2<.google.ads.googleads.v17.common.VideoTrueViewInStreamAdInfoH L
bumper (2:.google.ads.googleads.v17.common.VideoBumperInStreamAdInfoH K

out_stream (25.google.ads.googleads.v17.common.VideoOutstreamAdInfoH Y
non_skippable (2@.google.ads.googleads.v17.common.VideoNonSkippableInStreamAdInfoH E
in_feed	 (22.google.ads.googleads.v17.common.InFeedVideoAdInfoH B
format"�
VideoResponsiveAdInfo?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetD
long_headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAssetE
call_to_actions (2,.google.ads.googleads.v17.common.AdTextAsset=
videos (2-.google.ads.googleads.v17.common.AdVideoAssetH
companion_banners (2-.google.ads.googleads.v17.common.AdImageAsset
breadcrumb1 (	
breadcrumb2 (	"�
ResponsiveSearchAdInfo?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAsset
path1 (	H �
path2 (	H�B
_path1B
_path2"�
LegacyResponsiveDisplayAdInfo
short_headline (	H �
long_headline (	H�
description (	H�
business_name (	H�!
allow_flexible_color (H�
accent_color (	H�

main_color (	H� 
call_to_action_text (	H�

logo_image (	H�
square_logo_image (	H	�
marketing_image (	H
�#
square_marketing_image (	H�i
format_setting (2Q.google.ads.googleads.v17.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting
price_prefix (	H�

promo_text (	H�B
_short_headlineB
_long_headlineB
_descriptionB
_business_nameB
_allow_flexible_colorB
_accent_colorB
_main_colorB
_call_to_action_textB
_logo_imageB
_square_logo_imageB
_marketing_imageB
_square_marketing_imageB
_price_prefixB
_promo_text"�
	AppAdInfoG
mandatory_ad_text (2,.google.ads.googleads.v17.common.AdTextAsset?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAsset=
images (2-.google.ads.googleads.v17.common.AdImageAssetE
youtube_videos (2-.google.ads.googleads.v17.common.AdVideoAssetP
html5_media_bundles (23.google.ads.googleads.v17.common.AdMediaBundleAsset"�
AppEngagementAdInfo?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAsset=
images (2-.google.ads.googleads.v17.common.AdImageAsset=
videos (2-.google.ads.googleads.v17.common.AdVideoAsset"�
AppPreRegistrationAdInfo?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAsset=
images (2-.google.ads.googleads.v17.common.AdImageAssetE
youtube_videos (2-.google.ads.googleads.v17.common.AdVideoAsset"�
LegacyAppInstallAdInfo
app_id (	H �l
	app_store (2Y.google.ads.googleads.v17.enums.LegacyAppInstallAdAppStoreEnum.LegacyAppInstallAdAppStore
headline (	H�
description1 (	H�
description2	 (	H�B	
_app_idB
	_headlineB
_description1B
_description2"�
ResponsiveDisplayAdInfoG
marketing_images (2-.google.ads.googleads.v17.common.AdImageAssetN
square_marketing_images (2-.google.ads.googleads.v17.common.AdImageAssetB
logo_images (2-.google.ads.googleads.v17.common.AdImageAssetI
square_logo_images (2-.google.ads.googleads.v17.common.AdImageAsset?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetC
long_headline (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAssetE
youtube_videos (2-.google.ads.googleads.v17.common.AdVideoAsset
business_name (	H �

main_color (	H�
accent_color (	H�!
allow_flexible_color (H� 
call_to_action_text (	H�
price_prefix (	H�

promo_text (	H�i
format_setting (2Q.google.ads.googleads.v17.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSettingU
control_spec (2?.google.ads.googleads.v17.common.ResponsiveDisplayAdControlSpecB
_business_nameB
_main_colorB
_accent_colorB
_allow_flexible_colorB
_call_to_action_textB
_price_prefixB
_promo_text"�
LocalAdInfo?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAssetE
call_to_actions (2,.google.ads.googleads.v17.common.AdTextAssetG
marketing_images (2-.google.ads.googleads.v17.common.AdImageAssetB
logo_images (2-.google.ads.googleads.v17.common.AdImageAsset=
videos (2-.google.ads.googleads.v17.common.AdVideoAsset
path1	 (	H �
path2
 (	H�B
_path1B
_path2"�
DisplayUploadAdInfoz
display_upload_product_type (2U.google.ads.googleads.v17.enums.DisplayUploadProductTypeEnum.DisplayUploadProductTypeK
media_bundle (23.google.ads.googleads.v17.common.AdMediaBundleAssetH B
media_asset"a
ResponsiveDisplayAdControlSpec!
enable_asset_enhancements (
enable_autogen_video ("�
SmartCampaignAdInfo?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAsset"�

CallAdInfo
country_code (	
phone_number (	
business_name (	
	headline1 (	
	headline2 (	
description1 (	
description2 (	
call_tracked (
disable_call_conversion (%
phone_number_verification_url (	
conversion_action	 (	�
conversion_reporting_state
 (2].google.ads.googleads.v17.enums.CallConversionReportingStateEnum.CallConversionReportingState
path1 (	
path2 (	"�
DemandGenMultiAssetAdInfoG
marketing_images (2-.google.ads.googleads.v17.common.AdImageAssetN
square_marketing_images (2-.google.ads.googleads.v17.common.AdImageAssetP
portrait_marketing_images (2-.google.ads.googleads.v17.common.AdImageAssetB
logo_images (2-.google.ads.googleads.v17.common.AdImageAsset?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAsset
business_name (	H � 
call_to_action_text (	H�
lead_form_only	 (H�B
_business_nameB
_call_to_action_textB
_lead_form_only"�
DemandGenCarouselAdInfo
business_name (	B�AF

logo_image (2-.google.ads.googleads.v17.common.AdImageAssetB�AC
headline (2,.google.ads.googleads.v17.common.AdTextAssetB�AF
description (2,.google.ads.googleads.v17.common.AdTextAssetB�A
call_to_action_text (	Z
carousel_cards (2=.google.ads.googleads.v17.common.AdDemandGenCarouselCardAssetB�A"�
DemandGenVideoResponsiveAdInfo?
	headlines (2,.google.ads.googleads.v17.common.AdTextAssetD
long_headlines (2,.google.ads.googleads.v17.common.AdTextAssetB
descriptions (2,.google.ads.googleads.v17.common.AdTextAsset=
videos (2-.google.ads.googleads.v17.common.AdVideoAssetB
logo_images (2-.google.ads.googleads.v17.common.AdImageAsset
breadcrumb1 (	
breadcrumb2 (	H
business_name (2,.google.ads.googleads.v17.common.AdTextAssetB�AM
call_to_actions	 (24.google.ads.googleads.v17.common.AdCallToActionAsset"�
DemandGenProductAdInfoH
headline (2,.google.ads.googleads.v17.common.AdTextAssetB�AH �K
description (2,.google.ads.googleads.v17.common.AdTextAssetB�AH�K

logo_image (2-.google.ads.googleads.v17.common.AdImageAssetB�AH�
breadcrumb1 (	
breadcrumb2 (	H
business_name (2,.google.ads.googleads.v17.common.AdTextAssetB�AQ
call_to_action (24.google.ads.googleads.v17.common.AdCallToActionAssetH�B
	_headlineB
_descriptionB
_logo_imageB
_call_to_actionB�
#com.google.ads.googleads.v17.commonBAdTypeInfosProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
+google/ads/googleads/v17/enums/device.protogoogle.ads.googleads.v17.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
"com.google.ads.googleads.v17.enumsBDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Agoogle/ads/googleads/v17/enums/system_managed_entity_source.protogoogle.ads.googleads.v17.enums"q
SystemManagedResourceSourceEnum"N
SystemManagedResourceSource
UNSPECIFIED 
UNKNOWN
AD_VARIATIONSB�
"com.google.ads.googleads.v17.enumsBSystemManagedEntitySourceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
+google/ads/googleads/v17/resources/ad.proto"google.ads.googleads.v17.resources6google/ads/googleads/v17/common/custom_parameter.proto3google/ads/googleads/v17/common/final_app_url.proto4google/ads/googleads/v17/common/url_collection.proto,google/ads/googleads/v17/enums/ad_type.proto+google/ads/googleads/v17/enums/device.protoAgoogle/ads/googleads/v17/enums/system_managed_entity_source.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
Ad:
resource_name% (	B#�A�A
googleads.googleapis.com/Ad
id( (B�AH�

final_urls) (	D
final_app_urls# (2,.google.ads.googleads.v17.common.FinalAppUrl
final_mobile_urls* (	"
tracking_url_template+ (	H�
final_url_suffix, (	H�O
url_custom_parameters
 (20.google.ads.googleads.v17.common.CustomParameter
display_url- (	H�D
type (21.google.ads.googleads.v17.enums.AdTypeEnum.AdTypeB�A%
added_by_google_ads. (B�AH�L
device_preference (21.google.ads.googleads.v17.enums.DeviceEnum.DeviceG
url_collections (2..google.ads.googleads.v17.common.UrlCollection
name/ (	B�AH��
system_managed_resource_source (2[.google.ads.googleads.v17.enums.SystemManagedResourceSourceEnum.SystemManagedResourceSourceB�AC
text_ad (2+.google.ads.googleads.v17.common.TextAdInfoB�AH O
expanded_text_ad (23.google.ads.googleads.v17.common.ExpandedTextAdInfoH >
call_ad1 (2+.google.ads.googleads.v17.common.CallAdInfoH g
expanded_dynamic_search_ad (2<.google.ads.googleads.v17.common.ExpandedDynamicSearchAdInfoB�AH @
hotel_ad (2,.google.ads.googleads.v17.common.HotelAdInfoH Q
shopping_smart_ad (24.google.ads.googleads.v17.common.ShoppingSmartAdInfoH U
shopping_product_ad (26.google.ads.googleads.v17.common.ShoppingProductAdInfoH E
image_ad (2,.google.ads.googleads.v17.common.ImageAdInfoB�AH @
video_ad (2,.google.ads.googleads.v17.common.VideoAdInfoH U
video_responsive_ad\' (26.google.ads.googleads.v17.common.VideoResponsiveAdInfoH W
responsive_search_ad (27.google.ads.googleads.v17.common.ResponsiveSearchAdInfoH f
legacy_responsive_display_ad (2>.google.ads.googleads.v17.common.LegacyResponsiveDisplayAdInfoH <
app_ad (2*.google.ads.googleads.v17.common.AppAdInfoH ]
legacy_app_install_ad (27.google.ads.googleads.v17.common.LegacyAppInstallAdInfoB�AH Y
responsive_display_ad (28.google.ads.googleads.v17.common.ResponsiveDisplayAdInfoH @
local_ad  (2,.google.ads.googleads.v17.common.LocalAdInfoH Q
display_upload_ad! (24.google.ads.googleads.v17.common.DisplayUploadAdInfoH Q
app_engagement_ad" (24.google.ads.googleads.v17.common.AppEngagementAdInfoH j
shopping_comparison_listing_ad$ (2@.google.ads.googleads.v17.common.ShoppingComparisonListingAdInfoH Q
smart_campaign_ad0 (24.google.ads.googleads.v17.common.SmartCampaignAdInfoH \\
app_pre_registration_ad2 (29.google.ads.googleads.v17.common.AppPreRegistrationAdInfoH _
demand_gen_multi_asset_ad> (2:.google.ads.googleads.v17.common.DemandGenMultiAssetAdInfoH Z
demand_gen_carousel_ad? (28.google.ads.googleads.v17.common.DemandGenCarouselAdInfoH i
demand_gen_video_responsive_ad@ (2?.google.ads.googleads.v17.common.DemandGenVideoResponsiveAdInfoH X
demand_gen_product_ad= (27.google.ads.googleads.v17.common.DemandGenProductAdInfoH B
	travel_ad6 (2-.google.ads.googleads.v17.common.TravelAdInfoH :E�AB
googleads.googleapis.com/Ad#customers/{customer_id}/ads/{ad_id}B	
ad_dataB
_idB
_tracking_url_templateB
_final_url_suffixB
_display_urlB
_added_by_google_adsB
_nameB�
&com.google.ads.googleads.v17.resourcesBAdProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

