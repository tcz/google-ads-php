<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/value_rule_operation.proto

namespace Google\Ads\GoogleAds\V17\Enums\ValueRuleOperationEnum;

use UnexpectedValueException;

/**
 * Possible operations of the action of a conversion value rule.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.ValueRuleOperationEnum.ValueRuleOperation</code>
 */
class ValueRuleOperation
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
     * Add provided value to conversion value.
     *
     * Generated from protobuf enum <code>ADD = 2;</code>
     */
    const ADD = 2;
    /**
     * Multiply conversion value by provided value.
     *
     * Generated from protobuf enum <code>MULTIPLY = 3;</code>
     */
    const MULTIPLY = 3;
    /**
     * Set conversion value to provided value.
     *
     * Generated from protobuf enum <code>SET = 4;</code>
     */
    const SET = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ADD => 'ADD',
        self::MULTIPLY => 'MULTIPLY',
        self::SET => 'SET',
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
class_alias(ValueRuleOperation::class, \Google\Ads\GoogleAds\V17\Enums\ValueRuleOperationEnum_ValueRuleOperation::class);

