<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/campaign_keyword_match_type.proto

namespace Google\Ads\GoogleAds\V18\Enums\CampaignKeywordMatchTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing keyword match type of Campaign.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.CampaignKeywordMatchTypeEnum.CampaignKeywordMatchType</code>
 */
class CampaignKeywordMatchType
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Campaign level broad match.
     *
     * Generated from protobuf enum <code>BROAD = 2;</code>
     */
    const BROAD = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BROAD => 'BROAD',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignKeywordMatchType::class, \Google\Ads\GoogleAds\V18\Enums\CampaignKeywordMatchTypeEnum_CampaignKeywordMatchType::class);

