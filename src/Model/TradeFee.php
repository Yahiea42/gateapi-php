<?php
/**
 * TradeFee
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * Welcome to Gate.io API  APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * TradeFee Class Doc Comment
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */
class TradeFee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TradeFee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_id' => 'int',
        'taker_fee' => 'string',
        'maker_fee' => 'string',
        'gt_discount' => 'bool',
        'gt_taker_fee' => 'string',
        'gt_maker_fee' => 'string',
        'loan_fee' => 'string',
        'point_type' => 'string',
        'futures_taker_fee' => 'string',
        'futures_maker_fee' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_id' => 'int64',
        'taker_fee' => null,
        'maker_fee' => null,
        'gt_discount' => null,
        'gt_taker_fee' => null,
        'gt_maker_fee' => null,
        'loan_fee' => null,
        'point_type' => null,
        'futures_taker_fee' => null,
        'futures_maker_fee' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_id' => 'user_id',
        'taker_fee' => 'taker_fee',
        'maker_fee' => 'maker_fee',
        'gt_discount' => 'gt_discount',
        'gt_taker_fee' => 'gt_taker_fee',
        'gt_maker_fee' => 'gt_maker_fee',
        'loan_fee' => 'loan_fee',
        'point_type' => 'point_type',
        'futures_taker_fee' => 'futures_taker_fee',
        'futures_maker_fee' => 'futures_maker_fee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_id' => 'setUserId',
        'taker_fee' => 'setTakerFee',
        'maker_fee' => 'setMakerFee',
        'gt_discount' => 'setGtDiscount',
        'gt_taker_fee' => 'setGtTakerFee',
        'gt_maker_fee' => 'setGtMakerFee',
        'loan_fee' => 'setLoanFee',
        'point_type' => 'setPointType',
        'futures_taker_fee' => 'setFuturesTakerFee',
        'futures_maker_fee' => 'setFuturesMakerFee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_id' => 'getUserId',
        'taker_fee' => 'getTakerFee',
        'maker_fee' => 'getMakerFee',
        'gt_discount' => 'getGtDiscount',
        'gt_taker_fee' => 'getGtTakerFee',
        'gt_maker_fee' => 'getGtMakerFee',
        'loan_fee' => 'getLoanFee',
        'point_type' => 'getPointType',
        'futures_taker_fee' => 'getFuturesTakerFee',
        'futures_maker_fee' => 'getFuturesMakerFee'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['taker_fee'] = isset($data['taker_fee']) ? $data['taker_fee'] : null;
        $this->container['maker_fee'] = isset($data['maker_fee']) ? $data['maker_fee'] : null;
        $this->container['gt_discount'] = isset($data['gt_discount']) ? $data['gt_discount'] : null;
        $this->container['gt_taker_fee'] = isset($data['gt_taker_fee']) ? $data['gt_taker_fee'] : null;
        $this->container['gt_maker_fee'] = isset($data['gt_maker_fee']) ? $data['gt_maker_fee'] : null;
        $this->container['loan_fee'] = isset($data['loan_fee']) ? $data['loan_fee'] : null;
        $this->container['point_type'] = isset($data['point_type']) ? $data['point_type'] : null;
        $this->container['futures_taker_fee'] = isset($data['futures_taker_fee']) ? $data['futures_taker_fee'] : null;
        $this->container['futures_maker_fee'] = isset($data['futures_maker_fee']) ? $data['futures_maker_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets user_id
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int|null $user_id User ID
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets taker_fee
     *
     * @return string|null
     */
    public function getTakerFee()
    {
        return $this->container['taker_fee'];
    }

    /**
     * Sets taker_fee
     *
     * @param string|null $taker_fee taker fee rate
     *
     * @return $this
     */
    public function setTakerFee($taker_fee)
    {
        $this->container['taker_fee'] = $taker_fee;

        return $this;
    }

    /**
     * Gets maker_fee
     *
     * @return string|null
     */
    public function getMakerFee()
    {
        return $this->container['maker_fee'];
    }

    /**
     * Sets maker_fee
     *
     * @param string|null $maker_fee maker fee rate
     *
     * @return $this
     */
    public function setMakerFee($maker_fee)
    {
        $this->container['maker_fee'] = $maker_fee;

        return $this;
    }

    /**
     * Gets gt_discount
     *
     * @return bool|null
     */
    public function getGtDiscount()
    {
        return $this->container['gt_discount'];
    }

    /**
     * Sets gt_discount
     *
     * @param bool|null $gt_discount Is GT deduction is enabled
     *
     * @return $this
     */
    public function setGtDiscount($gt_discount)
    {
        $this->container['gt_discount'] = $gt_discount;

        return $this;
    }

    /**
     * Gets gt_taker_fee
     *
     * @return string|null
     */
    public function getGtTakerFee()
    {
        return $this->container['gt_taker_fee'];
    }

    /**
     * Sets gt_taker_fee
     *
     * @param string|null $gt_taker_fee Taker fee rate if using GT deduction. It will be 0 if GT deduction is disabled
     *
     * @return $this
     */
    public function setGtTakerFee($gt_taker_fee)
    {
        $this->container['gt_taker_fee'] = $gt_taker_fee;

        return $this;
    }

    /**
     * Gets gt_maker_fee
     *
     * @return string|null
     */
    public function getGtMakerFee()
    {
        return $this->container['gt_maker_fee'];
    }

    /**
     * Sets gt_maker_fee
     *
     * @param string|null $gt_maker_fee Maker fee rate if using GT deduction. It will be 0 if GT deduction is disabled
     *
     * @return $this
     */
    public function setGtMakerFee($gt_maker_fee)
    {
        $this->container['gt_maker_fee'] = $gt_maker_fee;

        return $this;
    }

    /**
     * Gets loan_fee
     *
     * @return string|null
     */
    public function getLoanFee()
    {
        return $this->container['loan_fee'];
    }

    /**
     * Sets loan_fee
     *
     * @param string|null $loan_fee Loan fee rate of margin lending
     *
     * @return $this
     */
    public function setLoanFee($loan_fee)
    {
        $this->container['loan_fee'] = $loan_fee;

        return $this;
    }

    /**
     * Gets point_type
     *
     * @return string|null
     */
    public function getPointType()
    {
        return $this->container['point_type'];
    }

    /**
     * Sets point_type
     *
     * @param string|null $point_type Point type. 0 - Initial version. 1 - new version since 202009
     *
     * @return $this
     */
    public function setPointType($point_type)
    {
        $this->container['point_type'] = $point_type;

        return $this;
    }

    /**
     * Gets futures_taker_fee
     *
     * @return string|null
     */
    public function getFuturesTakerFee()
    {
        return $this->container['futures_taker_fee'];
    }

    /**
     * Sets futures_taker_fee
     *
     * @param string|null $futures_taker_fee Futures trading taker fee
     *
     * @return $this
     */
    public function setFuturesTakerFee($futures_taker_fee)
    {
        $this->container['futures_taker_fee'] = $futures_taker_fee;

        return $this;
    }

    /**
     * Gets futures_maker_fee
     *
     * @return string|null
     */
    public function getFuturesMakerFee()
    {
        return $this->container['futures_maker_fee'];
    }

    /**
     * Sets futures_maker_fee
     *
     * @param string|null $futures_maker_fee Future trading maker fee
     *
     * @return $this
     */
    public function setFuturesMakerFee($futures_maker_fee)
    {
        $this->container['futures_maker_fee'] = $futures_maker_fee;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


