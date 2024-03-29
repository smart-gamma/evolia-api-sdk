<?php
/**
 * ReturnSignature
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
 * ReturnSignature Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReturnSignature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReturnSignature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'idContract' => 'string',
'idContractOrd' => 'int',
'idPerson' => 'string',
'signDateCustomer' => '\DateTime',
'signDateCandidate' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'idContract' => null,
'idContractOrd' => null,
'idPerson' => null,
'signDateCustomer' => 'date-time',
'signDateCandidate' => 'date-time'    ];

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
        'idContract' => 'IdContract',
'idContractOrd' => 'IdContractOrd',
'idPerson' => 'IdPerson',
'signDateCustomer' => 'SignDateCustomer',
'signDateCandidate' => 'SignDateCandidate'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idContract' => 'setIdContract',
'idContractOrd' => 'setIdContractOrd',
'idPerson' => 'setIdPerson',
'signDateCustomer' => 'setSignDateCustomer',
'signDateCandidate' => 'setSignDateCandidate'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idContract' => 'getIdContract',
'idContractOrd' => 'getIdContractOrd',
'idPerson' => 'getIdPerson',
'signDateCustomer' => 'getSignDateCustomer',
'signDateCandidate' => 'getSignDateCandidate'    ];

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
        $this->container['idContract'] = isset($data['idContract']) ? $data['idContract'] : null;
        $this->container['idContractOrd'] = isset($data['idContractOrd']) ? $data['idContractOrd'] : null;
        $this->container['idPerson'] = isset($data['idPerson']) ? $data['idPerson'] : null;
        $this->container['signDateCustomer'] = isset($data['signDateCustomer']) ? $data['signDateCustomer'] : null;
        $this->container['signDateCandidate'] = isset($data['signDateCandidate']) ? $data['signDateCandidate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['idContract'] === null) {
            $invalidProperties[] = "'idContract' can't be null";
        }
        if ($this->container['idContractOrd'] === null) {
            $invalidProperties[] = "'idContractOrd' can't be null";
        }
        if ($this->container['idPerson'] === null) {
            $invalidProperties[] = "'idPerson' can't be null";
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
     * Gets idContract
     *
     * @return string
     */
    public function getIdContract()
    {
        return $this->container['idContract'];
    }

    /**
     * Sets idContract
     *
     * @param string $idContract idContract
     *
     * @return $this
     */
    public function setIdContract($idContract)
    {
        $this->container['idContract'] = $idContract;

        return $this;
    }

    /**
     * Gets idContractOrd
     *
     * @return int
     */
    public function getIdContractOrd()
    {
        return $this->container['idContractOrd'];
    }

    /**
     * Sets idContractOrd
     *
     * @param int $idContractOrd idContractOrd
     *
     * @return $this
     */
    public function setIdContractOrd($idContractOrd)
    {
        $this->container['idContractOrd'] = $idContractOrd;

        return $this;
    }

    /**
     * Gets idPerson
     *
     * @return string
     */
    public function getIdPerson()
    {
        return $this->container['idPerson'];
    }

    /**
     * Sets idPerson
     *
     * @param string $idPerson idPerson
     *
     * @return $this
     */
    public function setIdPerson($idPerson)
    {
        $this->container['idPerson'] = $idPerson;

        return $this;
    }

    /**
     * Gets signDateCustomer
     *
     * @return \DateTime
     */
    public function getSignDateCustomer()
    {
        return $this->container['signDateCustomer'];
    }

    /**
     * Sets signDateCustomer
     *
     * @param \DateTime $signDateCustomer signDateCustomer
     *
     * @return $this
     */
    public function setSignDateCustomer($signDateCustomer)
    {
        $this->container['signDateCustomer'] = $signDateCustomer;

        return $this;
    }

    /**
     * Gets signDateCandidate
     *
     * @return \DateTime
     */
    public function getSignDateCandidate()
    {
        return $this->container['signDateCandidate'];
    }

    /**
     * Sets signDateCandidate
     *
     * @param \DateTime $signDateCandidate signDateCandidate
     *
     * @return $this
     */
    public function setSignDateCandidate($signDateCandidate)
    {
        $this->container['signDateCandidate'] = $signDateCandidate;

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
