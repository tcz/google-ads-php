<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/enums/manager_link_status.proto

namespace Google\Ads\GoogleAds\V18\Enums\ManagerLinkStatusEnum;

use UnexpectedValueException;

/**
 * Possible statuses of a link.
 *
 * Protobuf type <code>google.ads.googleads.v18.enums.ManagerLinkStatusEnum.ManagerLinkStatus</code>
 */
class ManagerLinkStatus
{
    /**
     * Not specified.
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
     * Indicates current in-effect relationship
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * Indicates terminated relationship
     *
     * Generated from protobuf enum <code>INACTIVE = 3;</code>
     */
    const INACTIVE = 3;
    /**
     * Indicates relationship has been requested by manager, but the client
     * hasn't accepted yet.
     *
     * Generated from protobuf enum <code>PENDING = 4;</code>
     */
    const PENDING = 4;
    /**
     * Relationship was requested by the manager, but the client has refused.
     *
     * Generated from protobuf enum <code>REFUSED = 5;</code>
     */
    const REFUSED = 5;
    /**
     * Indicates relationship has been requested by manager, but manager
     * canceled it.
     *
     * Generated from protobuf enum <code>CANCELED = 6;</code>
     */
    const CANCELED = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ACTIVE => 'ACTIVE',
        self::INACTIVE => 'INACTIVE',
        self::PENDING => 'PENDING',
        self::REFUSED => 'REFUSED',
        self::CANCELED => 'CANCELED',
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
class_alias(ManagerLinkStatus::class, \Google\Ads\GoogleAds\V18\Enums\ManagerLinkStatusEnum_ManagerLinkStatus::class);

