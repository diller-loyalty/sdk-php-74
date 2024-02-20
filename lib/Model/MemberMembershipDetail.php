<?php
/**
 * MemberMembershipDetail
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
 * MemberMembershipDetail Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class MemberMembershipDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberMembershipDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'points' => 'double',
'remainingPoints' => 'double',
'levelTitle' => 'string',
'nextLevelTitle' => 'string',
'nextLevelPoints' => 'double',
'levelExpireDate' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'points' => 'double',
'remainingPoints' => 'double',
'levelTitle' => null,
'nextLevelTitle' => null,
'nextLevelPoints' => 'double',
'levelExpireDate' => 'date-time'    ];

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
        'points' => 'points',
'remainingPoints' => 'remaining_points',
'levelTitle' => 'level_title',
'nextLevelTitle' => 'next_level_title',
'nextLevelPoints' => 'next_level_points',
'levelExpireDate' => 'level_expire_date'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'points' => 'setPoints',
'remainingPoints' => 'setRemainingPoints',
'levelTitle' => 'setLevelTitle',
'nextLevelTitle' => 'setNextLevelTitle',
'nextLevelPoints' => 'setNextLevelPoints',
'levelExpireDate' => 'setLevelExpireDate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'points' => 'getPoints',
'remainingPoints' => 'getRemainingPoints',
'levelTitle' => 'getLevelTitle',
'nextLevelTitle' => 'getNextLevelTitle',
'nextLevelPoints' => 'getNextLevelPoints',
'levelExpireDate' => 'getLevelExpireDate'    ];

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
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['remainingPoints'] = isset($data['remainingPoints']) ? $data['remainingPoints'] : null;
        $this->container['levelTitle'] = isset($data['levelTitle']) ? $data['levelTitle'] : null;
        $this->container['nextLevelTitle'] = isset($data['nextLevelTitle']) ? $data['nextLevelTitle'] : null;
        $this->container['nextLevelPoints'] = isset($data['nextLevelPoints']) ? $data['nextLevelPoints'] : null;
        $this->container['levelExpireDate'] = isset($data['levelExpireDate']) ? $data['levelExpireDate'] : null;
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
     * Gets points
     *
     * @return double
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param double $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets remainingPoints
     *
     * @return double
     */
    public function getRemainingPoints()
    {
        return $this->container['remainingPoints'];
    }

    /**
     * Sets remainingPoints
     *
     * @param double $remainingPoints remainingPoints
     *
     * @return $this
     */
    public function setRemainingPoints($remainingPoints)
    {
        $this->container['remainingPoints'] = $remainingPoints;

        return $this;
    }

    /**
     * Gets levelTitle
     *
     * @return string
     */
    public function getLevelTitle()
    {
        return $this->container['levelTitle'];
    }

    /**
     * Sets levelTitle
     *
     * @param string $levelTitle levelTitle
     *
     * @return $this
     */
    public function setLevelTitle($levelTitle)
    {
        $this->container['levelTitle'] = $levelTitle;

        return $this;
    }

    /**
     * Gets nextLevelTitle
     *
     * @return string
     */
    public function getNextLevelTitle()
    {
        return $this->container['nextLevelTitle'];
    }

    /**
     * Sets nextLevelTitle
     *
     * @param string $nextLevelTitle nextLevelTitle
     *
     * @return $this
     */
    public function setNextLevelTitle($nextLevelTitle)
    {
        $this->container['nextLevelTitle'] = $nextLevelTitle;

        return $this;
    }

    /**
     * Gets nextLevelPoints
     *
     * @return double
     */
    public function getNextLevelPoints()
    {
        return $this->container['nextLevelPoints'];
    }

    /**
     * Sets nextLevelPoints
     *
     * @param double $nextLevelPoints nextLevelPoints
     *
     * @return $this
     */
    public function setNextLevelPoints($nextLevelPoints)
    {
        $this->container['nextLevelPoints'] = $nextLevelPoints;

        return $this;
    }

    /**
     * Gets levelExpireDate
     *
     * @return \DateTime
     */
    public function getLevelExpireDate()
    {
        return $this->container['levelExpireDate'];
    }

    /**
     * Sets levelExpireDate
     *
     * @param \DateTime $levelExpireDate levelExpireDate
     *
     * @return $this
     */
    public function setLevelExpireDate($levelExpireDate)
    {
        $this->container['levelExpireDate'] = $levelExpireDate;

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