<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/errors/size_limit_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V18\Errors;

class SizeLimitError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v18/errors/size_limit_error.protogoogle.ads.googleads.v18.errors"�
SizeLimitErrorEnum"q
SizeLimitError
UNSPECIFIED 
UNKNOWN
REQUEST_SIZE_LIMIT_EXCEEDED 
RESPONSE_SIZE_LIMIT_EXCEEDEDB�
#com.google.ads.googleads.v18.errorsBSizeLimitErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v18/errors;errors�GAA�Google.Ads.GoogleAds.V18.Errors�Google\\Ads\\GoogleAds\\V18\\Errors�#Google::Ads::GoogleAds::V18::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

