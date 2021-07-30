<?php
/**
 * ExistsCandidate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Evolia
 *
 * Connection of Troops & Evolia
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.27
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Evolia\Model;

use \ArrayAccess;
use \Evolia\ObjectSerializer;

/**
 * ExistsCandidate Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExistsCandidate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExistsCandidate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'codeAgence' => 'string',
'numSS' => 'string',
'numSSCle' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'codeAgence' => null,
'numSS' => null,
'numSSCle' => null    ];

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
        'codeAgence' => 'Code_agence',
'numSS' => 'Num_SS',
'numSSCle' => 'Num_SSCle'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codeAgence' => 'setCodeAgence',
'numSS' => 'setNumSS',
'numSSCle' => 'setNumSSCle'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codeAgence' => 'getCodeAgence',
'numSS' => 'getNumSS',
'numSSCle' => 'getNumSSCle'    ];

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
        $this->container['codeAgence'] = isset($data['codeAgence']) ? $data['codeAgence'] : null;
        $this->container['numSS'] = isset($data['numSS']) ? $data['numSS'] : null;
        $this->container['numSSCle'] = isset($data['numSSCle']) ? $data['numSSCle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['codeAgence'] === null) {
            $invalidProperties[] = "'codeAgence' can't be null";
        }
        if ($this->container['numSS'] === null) {
            $invalidProperties[] = "'numSS' can't be null";
        }
        if ($this->container['numSSCle'] === null) {
            $invalidProperties[] = "'numSSCle' can't be null";
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
     * Gets codeAgence
     *
     * @return string
     */
    public function getCodeAgence()
    {
        return $this->container['codeAgence'];
    }

    /**
     * Sets codeAgence
     *
     * @param string $codeAgence codeAgence
     *
     * @return $this
     */
    public function setCodeAgence($codeAgence)
    {
        $this->container['codeAgence'] = $codeAgence;

        return $this;
    }

    /**
     * Gets numSS
     *
     * @return string
     */
    public function getNumSS()
    {
        return $this->container['numSS'];
    }

    /**
     * Sets numSS
     *
     * @param string $numSS numSS
     *
     * @return $this
     */
    public function setNumSS($numSS)
    {
        $this->container['numSS'] = $numSS;

        return $this;
    }

    /**
     * Gets numSSCle
     *
     * @return int
     */
    public function getNumSSCle()
    {
        return $this->container['numSSCle'];
    }

    /**
     * Sets numSSCle
     *
     * @param int $numSSCle numSSCle
     *
     * @return $this
     */
    public function setNumSSCle($numSSCle)
    {
        $this->container['numSSCle'] = $numSSCle;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
