<?php
/**
 * UpdateChannelRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  BigCommerce\Api\v3
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BigCommerce Channels API
 *
 * The Channels API enables you to create and manage listings across a BigCommerce merchant's sales channels.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

/**
 * UpdateChannelRequest Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BigCommerce\Api\v3
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdateChannelRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdateChannelRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'platform' => 'string',
        'name' => 'string',
        'external_id' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'platform' => 'platform',
        'name' => 'name',
        'external_id' => 'external_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'platform' => 'setPlatform',
        'name' => 'setName',
        'external_id' => 'setExternalId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'platform' => 'getPlatform',
        'name' => 'getName',
        'external_id' => 'getExternalId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_POS = 'pos';
    const TYPE_MARKETPLACE = 'marketplace';
    const TYPE_STOREFRONT = 'storefront';
    const TYPE_MARKETING = 'marketing';
    const TYPE_CUSTOM = 'custom';
    const PLATFORM_WORDPRESS = 'wordpress';
    const PLATFORM_BIGCOMMERCE = 'bigcommerce';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_POS,
            self::TYPE_MARKETPLACE,
            self::TYPE_STOREFRONT,
            self::TYPE_MARKETING,
            self::TYPE_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_WORDPRESS,
            self::PLATFORM_BIGCOMMERCE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["pos", "marketplace", "storefront", "marketing", "custom"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }

        if ($this->container['platform'] === null) {
            $invalid_properties[] = "'platform' can't be null";
        }
        $allowed_values = ["wordpress", "bigcommerce"];
        if (!in_array($this->container['platform'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'platform', must be one of #{allowed_values}.";
        }

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["pos", "marketplace", "storefront", "marketing", "custom"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['platform'] === null) {
            return false;
        }
        $allowed_values = ["wordpress", "bigcommerce"];
        if (!in_array($this->container['platform'], $allowed_values)) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('pos', 'marketplace', 'storefront', 'marketing', 'custom');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'pos', 'marketplace', 'storefront', 'marketing', 'custom'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets platform
     * @return string
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     * @param string $platform
     * @return $this
     */
    public function setPlatform($platform)
    {
        $allowed_values = array('wordpress', 'bigcommerce');
        if ((!in_array($platform, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'platform', must be one of 'wordpress', 'bigcommerce'");
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


