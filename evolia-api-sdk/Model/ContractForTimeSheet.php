<?php
/**
 * ContractForTimeSheet
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
 * Swagger Codegen version: 3.0.24
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
 * ContractForTimeSheet Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContractForTimeSheet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContractForTimeSheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'idContrat' => 'int',
'idPersonne' => 'int',
'idClient' => 'int',
'codeMission' => 'string',
'debut' => '\DateTime',
'finPrevue' => '\DateTime',
'finReelle' => '\DateTime'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'idContrat' => 'int32',
'idPersonne' => 'int32',
'idClient' => 'int32',
'codeMission' => null,
'debut' => 'date-time',
'finPrevue' => 'date-time',
'finReelle' => 'date-time'    ];

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
        'idContrat' => 'IdContrat',
'idPersonne' => 'IdPersonne',
'idClient' => 'IdClient',
'codeMission' => 'CodeMission',
'debut' => 'Debut',
'finPrevue' => 'FinPrevue',
'finReelle' => 'FinReelle'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idContrat' => 'setIdContrat',
'idPersonne' => 'setIdPersonne',
'idClient' => 'setIdClient',
'codeMission' => 'setCodeMission',
'debut' => 'setDebut',
'finPrevue' => 'setFinPrevue',
'finReelle' => 'setFinReelle'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idContrat' => 'getIdContrat',
'idPersonne' => 'getIdPersonne',
'idClient' => 'getIdClient',
'codeMission' => 'getCodeMission',
'debut' => 'getDebut',
'finPrevue' => 'getFinPrevue',
'finReelle' => 'getFinReelle'    ];

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
        $this->container['idContrat'] = isset($data['idContrat']) ? $data['idContrat'] : null;
        $this->container['idPersonne'] = isset($data['idPersonne']) ? $data['idPersonne'] : null;
        $this->container['idClient'] = isset($data['idClient']) ? $data['idClient'] : null;
        $this->container['codeMission'] = isset($data['codeMission']) ? $data['codeMission'] : null;
        $this->container['debut'] = isset($data['debut']) ? $data['debut'] : null;
        $this->container['finPrevue'] = isset($data['finPrevue']) ? $data['finPrevue'] : null;
        $this->container['finReelle'] = isset($data['finReelle']) ? $data['finReelle'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['idContrat'] === null) {
            $invalidProperties[] = "'idContrat' can't be null";
        }
        if ($this->container['idPersonne'] === null) {
            $invalidProperties[] = "'idPersonne' can't be null";
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
     * Gets idContrat
     *
     * @return int
     */
    public function getIdContrat()
    {
        return $this->container['idContrat'];
    }

    /**
     * Sets idContrat
     *
     * @param int $idContrat idContrat
     *
     * @return $this
     */
    public function setIdContrat($idContrat)
    {
        $this->container['idContrat'] = $idContrat;

        return $this;
    }

    /**
     * Gets idPersonne
     *
     * @return int
     */
    public function getIdPersonne()
    {
        return $this->container['idPersonne'];
    }

    /**
     * Sets idPersonne
     *
     * @param int $idPersonne idPersonne
     *
     * @return $this
     */
    public function setIdPersonne($idPersonne)
    {
        $this->container['idPersonne'] = $idPersonne;

        return $this;
    }

    /**
     * Gets idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->container['idClient'];
    }

    /**
     * Sets idClient
     *
     * @param int $idClient idClient
     *
     * @return $this
     */
    public function setIdClient($idClient)
    {
        $this->container['idClient'] = $idClient;

        return $this;
    }

    /**
     * Gets codeMission
     *
     * @return string
     */
    public function getCodeMission()
    {
        return $this->container['codeMission'];
    }

    /**
     * Sets codeMission
     *
     * @param string $codeMission codeMission
     *
     * @return $this
     */
    public function setCodeMission($codeMission)
    {
        $this->container['codeMission'] = $codeMission;

        return $this;
    }

    /**
     * Gets debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->container['debut'];
    }

    /**
     * Sets debut
     *
     * @param \DateTime $debut debut
     *
     * @return $this
     */
    public function setDebut($debut)
    {
        $this->container['debut'] = $debut;

        return $this;
    }

    /**
     * Gets finPrevue
     *
     * @return \DateTime
     */
    public function getFinPrevue()
    {
        return $this->container['finPrevue'];
    }

    /**
     * Sets finPrevue
     *
     * @param \DateTime $finPrevue finPrevue
     *
     * @return $this
     */
    public function setFinPrevue($finPrevue)
    {
        $this->container['finPrevue'] = $finPrevue;

        return $this;
    }

    /**
     * Gets finReelle
     *
     * @return \DateTime
     */
    public function getFinReelle()
    {
        return $this->container['finReelle'];
    }

    /**
     * Sets finReelle
     *
     * @param \DateTime $finReelle finReelle
     *
     * @return $this
     */
    public function setFinReelle($finReelle)
    {
        $this->container['finReelle'] = $finReelle;

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
