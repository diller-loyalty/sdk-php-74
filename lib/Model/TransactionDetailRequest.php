<?php
/**
 * TransactionDetailRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DillerAPI\Model;

use \ArrayAccess;
use \DillerAPI\ObjectSerializer;

/**
 * TransactionDetailRequest Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class TransactionDetailRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionDetailRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product' => '\DillerAPI\Model\ProductDetail',
'quantity' => 'double',
'unitPrice' => 'double',
'unitMeasure' => 'string',
'taxPercentage' => 'double',
'discount' => 'double',
'totalPrice' => 'double',
'stampCardIds' => 'int[]',
'stampCards' => '\DillerAPI\Model\StampCard[]',
'couponCodes' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product' => null,
'quantity' => 'double',
'unitPrice' => 'double',
'unitMeasure' => null,
'taxPercentage' => 'double',
'discount' => 'double',
'totalPrice' => 'double',
'stampCardIds' => 'int32',
'stampCards' => null,
'couponCodes' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product' => 'product',
'quantity' => 'quantity',
'unitPrice' => 'unit_price',
'unitMeasure' => 'unit_measure',
'taxPercentage' => 'tax_percentage',
'discount' => 'discount',
'totalPrice' => 'total_price',
'stampCardIds' => 'stamp_card_ids',
'stampCards' => 'stamp_cards',
'couponCodes' => 'coupon_codes'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product' => 'setProduct',
'quantity' => 'setQuantity',
'unitPrice' => 'setUnitPrice',
'unitMeasure' => 'setUnitMeasure',
'taxPercentage' => 'setTaxPercentage',
'discount' => 'setDiscount',
'totalPrice' => 'setTotalPrice',
'stampCardIds' => 'setStampCardIds',
'stampCards' => 'setStampCards',
'couponCodes' => 'setCouponCodes'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product' => 'getProduct',
'quantity' => 'getQuantity',
'unitPrice' => 'getUnitPrice',
'unitMeasure' => 'getUnitMeasure',
'taxPercentage' => 'getTaxPercentage',
'discount' => 'getDiscount',
'totalPrice' => 'getTotalPrice',
'stampCardIds' => 'getStampCardIds',
'stampCards' => 'getStampCards',
'couponCodes' => 'getCouponCodes'    ];

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
        return self::$swaggerModelName;
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
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['unitMeasure'] = isset($data['unitMeasure']) ? $data['unitMeasure'] : null;
        $this->container['taxPercentage'] = isset($data['taxPercentage']) ? $data['taxPercentage'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['totalPrice'] = isset($data['totalPrice']) ? $data['totalPrice'] : null;
        $this->container['stampCardIds'] = isset($data['stampCardIds']) ? $data['stampCardIds'] : null;
        $this->container['stampCards'] = isset($data['stampCards']) ? $data['stampCards'] : null;
        $this->container['couponCodes'] = isset($data['couponCodes']) ? $data['couponCodes'] : null;
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
     * Gets product
     *
     * @return \DillerAPI\Model\ProductDetail
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \DillerAPI\Model\ProductDetail $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param double $unitPrice Unit price including taxes
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets unitMeasure
     *
     * @return string
     */
    public function getUnitMeasure()
    {
        return $this->container['unitMeasure'];
    }

    /**
     * Sets unitMeasure
     *
     * @param string $unitMeasure unitMeasure
     *
     * @return $this
     */
    public function setUnitMeasure($unitMeasure)
    {
        $this->container['unitMeasure'] = $unitMeasure;

        return $this;
    }

    /**
     * Gets taxPercentage
     *
     * @return double
     */
    public function getTaxPercentage()
    {
        return $this->container['taxPercentage'];
    }

    /**
     * Sets taxPercentage
     *
     * @param double $taxPercentage Value stored from 0.00 to 100.00
     *
     * @return $this
     */
    public function setTaxPercentage($taxPercentage)
    {
        $this->container['taxPercentage'] = $taxPercentage;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return double
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param double $discount Discount amount applied to this product
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets totalPrice
     *
     * @return double
     */
    public function getTotalPrice()
    {
        return $this->container['totalPrice'];
    }

    /**
     * Sets totalPrice
     *
     * @param double $totalPrice Total price after dicount and taxes  Qty x unit price - discount
     *
     * @return $this
     */
    public function setTotalPrice($totalPrice)
    {
        $this->container['totalPrice'] = $totalPrice;

        return $this;
    }

    /**
     * Gets stampCardIds
     *
     * @return int[]
     */
    public function getStampCardIds()
    {
        return $this->container['stampCardIds'];
    }

    /**
     * Sets stampCardIds
     *
     * @param int[] $stampCardIds WARNING: This property is obsolete. Use the collection property StampCards instead.
     *
     * @return $this
     */
    public function setStampCardIds($stampCardIds)
    {
        $this->container['stampCardIds'] = $stampCardIds;

        return $this;
    }

    /**
     * Gets stampCards
     *
     * @return \DillerAPI\Model\StampCard[]
     */
    public function getStampCards()
    {
        return $this->container['stampCards'];
    }

    /**
     * Sets stampCards
     *
     * @param \DillerAPI\Model\StampCard[] $stampCards stampCards
     *
     * @return $this
     */
    public function setStampCards($stampCards)
    {
        $this->container['stampCards'] = $stampCards;

        return $this;
    }

    /**
     * Gets couponCodes
     *
     * @return string[]
     */
    public function getCouponCodes()
    {
        return $this->container['couponCodes'];
    }

    /**
     * Sets couponCodes
     *
     * @param string[] $couponCodes couponCodes
     *
     * @return $this
     */
    public function setCouponCodes($couponCodes)
    {
        $this->container['couponCodes'] = $couponCodes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
