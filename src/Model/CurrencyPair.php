<?php
/**
 * CurrencyPair
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
 * CurrencyPair Class Doc Comment
 *
 * @category    Class
 * @description Spot currency pair
 * @package     GateApi
 * @author      GateIO
 * @link        https://www.gate.io
 */
class CurrencyPair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CurrencyPair';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'base' => 'string',
        'quote' => 'string',
        'fee' => 'string',
        'min_base_amount' => 'string',
        'min_quote_amount' => 'string',
        'amount_precision' => 'int',
        'precision' => 'int',
        'trade_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'base' => null,
        'quote' => null,
        'fee' => null,
        'min_base_amount' => null,
        'min_quote_amount' => null,
        'amount_precision' => null,
        'precision' => null,
        'trade_status' => null
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
        'id' => 'id',
        'base' => 'base',
        'quote' => 'quote',
        'fee' => 'fee',
        'min_base_amount' => 'min_base_amount',
        'min_quote_amount' => 'min_quote_amount',
        'amount_precision' => 'amount_precision',
        'precision' => 'precision',
        'trade_status' => 'trade_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'base' => 'setBase',
        'quote' => 'setQuote',
        'fee' => 'setFee',
        'min_base_amount' => 'setMinBaseAmount',
        'min_quote_amount' => 'setMinQuoteAmount',
        'amount_precision' => 'setAmountPrecision',
        'precision' => 'setPrecision',
        'trade_status' => 'setTradeStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'base' => 'getBase',
        'quote' => 'getQuote',
        'fee' => 'getFee',
        'min_base_amount' => 'getMinBaseAmount',
        'min_quote_amount' => 'getMinQuoteAmount',
        'amount_precision' => 'getAmountPrecision',
        'precision' => 'getPrecision',
        'trade_status' => 'getTradeStatus'
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

    const TRADE_STATUS_UNTRADABLE = 'untradable';
    const TRADE_STATUS_BUYABLE = 'buyable';
    const TRADE_STATUS_SELLABLE = 'sellable';
    const TRADE_STATUS_TRADABLE = 'tradable';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTradeStatusAllowableValues()
    {
        return [
            self::TRADE_STATUS_UNTRADABLE,
            self::TRADE_STATUS_BUYABLE,
            self::TRADE_STATUS_SELLABLE,
            self::TRADE_STATUS_TRADABLE,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['quote'] = isset($data['quote']) ? $data['quote'] : null;
        $this->container['fee'] = isset($data['fee']) ? $data['fee'] : null;
        $this->container['min_base_amount'] = isset($data['min_base_amount']) ? $data['min_base_amount'] : null;
        $this->container['min_quote_amount'] = isset($data['min_quote_amount']) ? $data['min_quote_amount'] : null;
        $this->container['amount_precision'] = isset($data['amount_precision']) ? $data['amount_precision'] : null;
        $this->container['precision'] = isset($data['precision']) ? $data['precision'] : null;
        $this->container['trade_status'] = isset($data['trade_status']) ? $data['trade_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTradeStatusAllowableValues();
        if (!is_null($this->container['trade_status']) && !in_array($this->container['trade_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trade_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Currency pair
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets base
     *
     * @return string|null
     */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
     * Sets base
     *
     * @param string|null $base Base currency
     *
     * @return $this
     */
    public function setBase($base)
    {
        $this->container['base'] = $base;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return string|null
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param string|null $quote Quote currency
     *
     * @return $this
     */
    public function setQuote($quote)
    {
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets fee
     *
     * @return string|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param string|null $fee Trading fee
     *
     * @return $this
     */
    public function setFee($fee)
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets min_base_amount
     *
     * @return string|null
     */
    public function getMinBaseAmount()
    {
        return $this->container['min_base_amount'];
    }

    /**
     * Sets min_base_amount
     *
     * @param string|null $min_base_amount Minimum amount of base currency to trade, `null` means no limit
     *
     * @return $this
     */
    public function setMinBaseAmount($min_base_amount)
    {
        $this->container['min_base_amount'] = $min_base_amount;

        return $this;
    }

    /**
     * Gets min_quote_amount
     *
     * @return string|null
     */
    public function getMinQuoteAmount()
    {
        return $this->container['min_quote_amount'];
    }

    /**
     * Sets min_quote_amount
     *
     * @param string|null $min_quote_amount Minimum amount of quote currency to trade, `null` means no limit
     *
     * @return $this
     */
    public function setMinQuoteAmount($min_quote_amount)
    {
        $this->container['min_quote_amount'] = $min_quote_amount;

        return $this;
    }

    /**
     * Gets amount_precision
     *
     * @return int|null
     */
    public function getAmountPrecision()
    {
        return $this->container['amount_precision'];
    }

    /**
     * Sets amount_precision
     *
     * @param int|null $amount_precision Amount scale
     *
     * @return $this
     */
    public function setAmountPrecision($amount_precision)
    {
        $this->container['amount_precision'] = $amount_precision;

        return $this;
    }

    /**
     * Gets precision
     *
     * @return int|null
     */
    public function getPrecision()
    {
        return $this->container['precision'];
    }

    /**
     * Sets precision
     *
     * @param int|null $precision Price scale
     *
     * @return $this
     */
    public function setPrecision($precision)
    {
        $this->container['precision'] = $precision;

        return $this;
    }

    /**
     * Gets trade_status
     *
     * @return string|null
     */
    public function getTradeStatus()
    {
        return $this->container['trade_status'];
    }

    /**
     * Sets trade_status
     *
     * @param string|null $trade_status How currency pair can be traded  - untradable: cannot be bought or sold - buyable: can be bought - sellable: can be sold - tradable: can be bought or sold
     *
     * @return $this
     */
    public function setTradeStatus($trade_status)
    {
        $allowedValues = $this->getTradeStatusAllowableValues();
        if (!is_null($trade_status) && !in_array($trade_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'trade_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trade_status'] = $trade_status;

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


