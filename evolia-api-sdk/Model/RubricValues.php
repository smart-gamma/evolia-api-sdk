<?php
/**
 * RubricValues
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
 * Swagger Codegen version: 3.0.23
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
 * RubricValues Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RubricValues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RubricValues';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
'libelle' => 'string',
'tag' => 'string',
'commentaire' => 'string',
'basePayee' => 'float',
'tauxPayee' => 'float',
'baseFacturee' => 'float',
'tauxFacturee' => 'float'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
'libelle' => null,
'tag' => null,
'commentaire' => null,
'basePayee' => 'float',
'tauxPayee' => 'float',
'baseFacturee' => 'float',
'tauxFacturee' => 'float'    ];

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
        'code' => 'Code',
'libelle' => 'Libelle',
'tag' => 'Tag',
'commentaire' => 'Commentaire',
'basePayee' => 'BasePayee',
'tauxPayee' => 'TauxPayee',
'baseFacturee' => 'BaseFacturee',
'tauxFacturee' => 'TauxFacturee'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
'libelle' => 'setLibelle',
'tag' => 'setTag',
'commentaire' => 'setCommentaire',
'basePayee' => 'setBasePayee',
'tauxPayee' => 'setTauxPayee',
'baseFacturee' => 'setBaseFacturee',
'tauxFacturee' => 'setTauxFacturee'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
'libelle' => 'getLibelle',
'tag' => 'getTag',
'commentaire' => 'getCommentaire',
'basePayee' => 'getBasePayee',
'tauxPayee' => 'getTauxPayee',
'baseFacturee' => 'getBaseFacturee',
'tauxFacturee' => 'getTauxFacturee'    ];

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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['libelle'] = isset($data['libelle']) ? $data['libelle'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['commentaire'] = isset($data['commentaire']) ? $data['commentaire'] : null;
        $this->container['basePayee'] = isset($data['basePayee']) ? $data['basePayee'] : null;
        $this->container['tauxPayee'] = isset($data['tauxPayee']) ? $data['tauxPayee'] : null;
        $this->container['baseFacturee'] = isset($data['baseFacturee']) ? $data['baseFacturee'] : null;
        $this->container['tauxFacturee'] = isset($data['tauxFacturee']) ? $data['tauxFacturee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->container['libelle'];
    }

    /**
     * Sets libelle
     *
     * @param string $libelle libelle
     *
     * @return $this
     */
    public function setLibelle($libelle)
    {
        $this->container['libelle'] = $libelle;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag tag
     *
     * @return $this
     */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->container['commentaire'];
    }

    /**
     * Sets commentaire
     *
     * @param string $commentaire commentaire
     *
     * @return $this
     */
    public function setCommentaire($commentaire)
    {
        $this->container['commentaire'] = $commentaire;

        return $this;
    }

    /**
     * Gets basePayee
     *
     * @return float
     */
    public function getBasePayee()
    {
        return $this->container['basePayee'];
    }

    /**
     * Sets basePayee
     *
     * @param float $basePayee basePayee
     *
     * @return $this
     */
    public function setBasePayee($basePayee)
    {
        $this->container['basePayee'] = $basePayee;

        return $this;
    }

    /**
     * Gets tauxPayee
     *
     * @return float
     */
    public function getTauxPayee()
    {
        return $this->container['tauxPayee'];
    }

    /**
     * Sets tauxPayee
     *
     * @param float $tauxPayee tauxPayee
     *
     * @return $this
     */
    public function setTauxPayee($tauxPayee)
    {
        $this->container['tauxPayee'] = $tauxPayee;

        return $this;
    }

    /**
     * Gets baseFacturee
     *
     * @return float
     */
    public function getBaseFacturee()
    {
        return $this->container['baseFacturee'];
    }

    /**
     * Sets baseFacturee
     *
     * @param float $baseFacturee baseFacturee
     *
     * @return $this
     */
    public function setBaseFacturee($baseFacturee)
    {
        $this->container['baseFacturee'] = $baseFacturee;

        return $this;
    }

    /**
     * Gets tauxFacturee
     *
     * @return float
     */
    public function getTauxFacturee()
    {
        return $this->container['tauxFacturee'];
    }

    /**
     * Sets tauxFacturee
     *
     * @param float $tauxFacturee tauxFacturee
     *
     * @return $this
     */
    public function setTauxFacturee($tauxFacturee)
    {
        $this->container['tauxFacturee'] = $tauxFacturee;

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
