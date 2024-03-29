<?php
/**
 * StoreResponse
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
 * StoreResponse Class Doc Comment
 *
 * @category Class
 * @package  DillerAPI
 * @author   DILLER AS
 * @link     https://diller.io
 */
class StoreResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StoreResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'taxNumber' => 'string',
'externalId' => 'string',
'storeName' => 'string',
'phone' => '\DillerAPI\Model\Phone',
'email' => 'string',
'address' => '\DillerAPI\Model\Address',
'currency' => 'string',
'timeZone' => 'string',
'culture' => 'string',
'stampsEnabled' => 'bool',
'friendReferralEnabled' => 'bool',
'pointsSystem' => '\DillerAPI\Model\PointsSystem',
'memberIdentifier' => '\DillerAPI\Model\MemberIdentifier',
'privacyPolicyUrl' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'taxNumber' => null,
'externalId' => null,
'storeName' => null,
'phone' => null,
'email' => null,
'address' => null,
'currency' => null,
'timeZone' => null,
'culture' => null,
'stampsEnabled' => null,
'friendReferralEnabled' => null,
'pointsSystem' => null,
'memberIdentifier' => null,
'privacyPolicyUrl' => null    ];

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
        'id' => 'id',
'taxNumber' => 'tax_number',
'externalId' => 'external_id',
'storeName' => 'store_name',
'phone' => 'phone',
'email' => 'email',
'address' => 'address',
'currency' => 'currency',
'timeZone' => 'time_zone',
'culture' => 'culture',
'stampsEnabled' => 'stamps_enabled',
'friendReferralEnabled' => 'friend_referral_enabled',
'pointsSystem' => 'points_system',
'memberIdentifier' => 'member_identifier',
'privacyPolicyUrl' => 'privacy_policy_url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'taxNumber' => 'setTaxNumber',
'externalId' => 'setExternalId',
'storeName' => 'setStoreName',
'phone' => 'setPhone',
'email' => 'setEmail',
'address' => 'setAddress',
'currency' => 'setCurrency',
'timeZone' => 'setTimeZone',
'culture' => 'setCulture',
'stampsEnabled' => 'setStampsEnabled',
'friendReferralEnabled' => 'setFriendReferralEnabled',
'pointsSystem' => 'setPointsSystem',
'memberIdentifier' => 'setMemberIdentifier',
'privacyPolicyUrl' => 'setPrivacyPolicyUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'taxNumber' => 'getTaxNumber',
'externalId' => 'getExternalId',
'storeName' => 'getStoreName',
'phone' => 'getPhone',
'email' => 'getEmail',
'address' => 'getAddress',
'currency' => 'getCurrency',
'timeZone' => 'getTimeZone',
'culture' => 'getCulture',
'stampsEnabled' => 'getStampsEnabled',
'friendReferralEnabled' => 'getFriendReferralEnabled',
'pointsSystem' => 'getPointsSystem',
'memberIdentifier' => 'getMemberIdentifier',
'privacyPolicyUrl' => 'getPrivacyPolicyUrl'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['taxNumber'] = isset($data['taxNumber']) ? $data['taxNumber'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['storeName'] = isset($data['storeName']) ? $data['storeName'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['culture'] = isset($data['culture']) ? $data['culture'] : null;
        $this->container['stampsEnabled'] = isset($data['stampsEnabled']) ? $data['stampsEnabled'] : null;
        $this->container['friendReferralEnabled'] = isset($data['friendReferralEnabled']) ? $data['friendReferralEnabled'] : null;
        $this->container['pointsSystem'] = isset($data['pointsSystem']) ? $data['pointsSystem'] : null;
        $this->container['memberIdentifier'] = isset($data['memberIdentifier']) ? $data['memberIdentifier'] : null;
        $this->container['privacyPolicyUrl'] = isset($data['privacyPolicyUrl']) ? $data['privacyPolicyUrl'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets taxNumber
     *
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->container['taxNumber'];
    }

    /**
     * Sets taxNumber
     *
     * @param string $taxNumber taxNumber
     *
     * @return $this
     */
    public function setTaxNumber($taxNumber)
    {
        $this->container['taxNumber'] = $taxNumber;

        return $this;
    }

    /**
     * Gets externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
     * Sets externalId
     *
     * @param string $externalId externalId
     *
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;

        return $this;
    }

    /**
     * Gets storeName
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['storeName'];
    }

    /**
     * Sets storeName
     *
     * @param string $storeName storeName
     *
     * @return $this
     */
    public function setStoreName($storeName)
    {
        $this->container['storeName'] = $storeName;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return \DillerAPI\Model\Phone
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param \DillerAPI\Model\Phone $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \DillerAPI\Model\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \DillerAPI\Model\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
     * Sets timeZone
     *
     * @param string $timeZone timeZone
     *
     * @return $this
     */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;

        return $this;
    }

    /**
     * Gets culture
     *
     * @return string
     */
    public function getCulture()
    {
        return $this->container['culture'];
    }

    /**
     * Sets culture
     *
     * @param string $culture culture
     *
     * @return $this
     */
    public function setCulture($culture)
    {
        $this->container['culture'] = $culture;

        return $this;
    }

    /**
     * Gets stampsEnabled
     *
     * @return bool
     */
    public function getStampsEnabled()
    {
        return $this->container['stampsEnabled'];
    }

    /**
     * Sets stampsEnabled
     *
     * @param bool $stampsEnabled stampsEnabled
     *
     * @return $this
     */
    public function setStampsEnabled($stampsEnabled)
    {
        $this->container['stampsEnabled'] = $stampsEnabled;

        return $this;
    }

    /**
     * Gets friendReferralEnabled
     *
     * @return bool
     */
    public function getFriendReferralEnabled()
    {
        return $this->container['friendReferralEnabled'];
    }

    /**
     * Sets friendReferralEnabled
     *
     * @param bool $friendReferralEnabled friendReferralEnabled
     *
     * @return $this
     */
    public function setFriendReferralEnabled($friendReferralEnabled)
    {
        $this->container['friendReferralEnabled'] = $friendReferralEnabled;

        return $this;
    }

    /**
     * Gets pointsSystem
     *
     * @return \DillerAPI\Model\PointsSystem
     */
    public function getPointsSystem()
    {
        return $this->container['pointsSystem'];
    }

    /**
     * Sets pointsSystem
     *
     * @param \DillerAPI\Model\PointsSystem $pointsSystem pointsSystem
     *
     * @return $this
     */
    public function setPointsSystem($pointsSystem)
    {
        $this->container['pointsSystem'] = $pointsSystem;

        return $this;
    }

    /**
     * Gets memberIdentifier
     *
     * @return \DillerAPI\Model\MemberIdentifier
     */
    public function getMemberIdentifier()
    {
        return $this->container['memberIdentifier'];
    }

    /**
     * Sets memberIdentifier
     *
     * @param \DillerAPI\Model\MemberIdentifier $memberIdentifier memberIdentifier
     *
     * @return $this
     */
    public function setMemberIdentifier($memberIdentifier)
    {
        $this->container['memberIdentifier'] = $memberIdentifier;

        return $this;
    }

    /**
     * Gets privacyPolicyUrl
     *
     * @return string
     */
    public function getPrivacyPolicyUrl()
    {
        return $this->container['privacyPolicyUrl'];
    }

    /**
     * Sets privacyPolicyUrl
     *
     * @param string $privacyPolicyUrl privacyPolicyUrl
     *
     * @return $this
     */
    public function setPrivacyPolicyUrl($privacyPolicyUrl)
    {
        $this->container['privacyPolicyUrl'] = $privacyPolicyUrl;

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
