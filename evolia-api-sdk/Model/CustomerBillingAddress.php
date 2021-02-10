<?php
/**
 * CustomerBillingAddress
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
 * CustomerBillingAddress Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerBillingAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerBillingAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'designation' => 'string',
'adresse1' => 'string',
'adresse2' => 'string',
'adresse3' => 'string',
'cP' => 'string',
'commune' => 'string',
'pays' => 'string',
'telephone' => 'string',
'fax' => 'string',
'email' => 'string',
'web' => 'string',
'aPE' => 'string',
'tVAClef' => 'string',
'tVAPays' => 'string',
'sIREN' => 'string',
'nIC' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'designation' => null,
'adresse1' => null,
'adresse2' => null,
'adresse3' => null,
'cP' => null,
'commune' => null,
'pays' => null,
'telephone' => null,
'fax' => null,
'email' => null,
'web' => null,
'aPE' => null,
'tVAClef' => null,
'tVAPays' => null,
'sIREN' => null,
'nIC' => null    ];

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
        'designation' => 'Designation',
'adresse1' => 'Adresse1',
'adresse2' => 'Adresse2',
'adresse3' => 'Adresse3',
'cP' => 'CP',
'commune' => 'Commune',
'pays' => 'Pays',
'telephone' => 'Telephone',
'fax' => 'Fax',
'email' => 'Email',
'web' => 'Web',
'aPE' => 'APE',
'tVAClef' => 'TVAClef',
'tVAPays' => 'TVAPays',
'sIREN' => 'SIREN',
'nIC' => 'NIC'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'designation' => 'setDesignation',
'adresse1' => 'setAdresse1',
'adresse2' => 'setAdresse2',
'adresse3' => 'setAdresse3',
'cP' => 'setCP',
'commune' => 'setCommune',
'pays' => 'setPays',
'telephone' => 'setTelephone',
'fax' => 'setFax',
'email' => 'setEmail',
'web' => 'setWeb',
'aPE' => 'setAPE',
'tVAClef' => 'setTVAClef',
'tVAPays' => 'setTVAPays',
'sIREN' => 'setSIREN',
'nIC' => 'setNIC'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'designation' => 'getDesignation',
'adresse1' => 'getAdresse1',
'adresse2' => 'getAdresse2',
'adresse3' => 'getAdresse3',
'cP' => 'getCP',
'commune' => 'getCommune',
'pays' => 'getPays',
'telephone' => 'getTelephone',
'fax' => 'getFax',
'email' => 'getEmail',
'web' => 'getWeb',
'aPE' => 'getAPE',
'tVAClef' => 'getTVAClef',
'tVAPays' => 'getTVAPays',
'sIREN' => 'getSIREN',
'nIC' => 'getNIC'    ];

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
        $this->container['designation'] = isset($data['designation']) ? $data['designation'] : null;
        $this->container['adresse1'] = isset($data['adresse1']) ? $data['adresse1'] : null;
        $this->container['adresse2'] = isset($data['adresse2']) ? $data['adresse2'] : null;
        $this->container['adresse3'] = isset($data['adresse3']) ? $data['adresse3'] : null;
        $this->container['cP'] = isset($data['cP']) ? $data['cP'] : null;
        $this->container['commune'] = isset($data['commune']) ? $data['commune'] : null;
        $this->container['pays'] = isset($data['pays']) ? $data['pays'] : null;
        $this->container['telephone'] = isset($data['telephone']) ? $data['telephone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['web'] = isset($data['web']) ? $data['web'] : null;
        $this->container['aPE'] = isset($data['aPE']) ? $data['aPE'] : null;
        $this->container['tVAClef'] = isset($data['tVAClef']) ? $data['tVAClef'] : null;
        $this->container['tVAPays'] = isset($data['tVAPays']) ? $data['tVAPays'] : null;
        $this->container['sIREN'] = isset($data['sIREN']) ? $data['sIREN'] : null;
        $this->container['nIC'] = isset($data['nIC']) ? $data['nIC'] : null;
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
     * Gets designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->container['designation'];
    }

    /**
     * Sets designation
     *
     * @param string $designation designation
     *
     * @return $this
     */
    public function setDesignation($designation)
    {
        $this->container['designation'] = $designation;

        return $this;
    }

    /**
     * Gets adresse1
     *
     * @return string
     */
    public function getAdresse1()
    {
        return $this->container['adresse1'];
    }

    /**
     * Sets adresse1
     *
     * @param string $adresse1 adresse1
     *
     * @return $this
     */
    public function setAdresse1($adresse1)
    {
        $this->container['adresse1'] = $adresse1;

        return $this;
    }

    /**
     * Gets adresse2
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->container['adresse2'];
    }

    /**
     * Sets adresse2
     *
     * @param string $adresse2 adresse2
     *
     * @return $this
     */
    public function setAdresse2($adresse2)
    {
        $this->container['adresse2'] = $adresse2;

        return $this;
    }

    /**
     * Gets adresse3
     *
     * @return string
     */
    public function getAdresse3()
    {
        return $this->container['adresse3'];
    }

    /**
     * Sets adresse3
     *
     * @param string $adresse3 adresse3
     *
     * @return $this
     */
    public function setAdresse3($adresse3)
    {
        $this->container['adresse3'] = $adresse3;

        return $this;
    }

    /**
     * Gets cP
     *
     * @return string
     */
    public function getCP()
    {
        return $this->container['cP'];
    }

    /**
     * Sets cP
     *
     * @param string $cP cP
     *
     * @return $this
     */
    public function setCP($cP)
    {
        $this->container['cP'] = $cP;

        return $this;
    }

    /**
     * Gets commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->container['commune'];
    }

    /**
     * Sets commune
     *
     * @param string $commune commune
     *
     * @return $this
     */
    public function setCommune($commune)
    {
        $this->container['commune'] = $commune;

        return $this;
    }

    /**
     * Gets pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->container['pays'];
    }

    /**
     * Sets pays
     *
     * @param string $pays pays
     *
     * @return $this
     */
    public function setPays($pays)
    {
        $this->container['pays'] = $pays;

        return $this;
    }

    /**
     * Gets telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->container['telephone'];
    }

    /**
     * Sets telephone
     *
     * @param string $telephone telephone
     *
     * @return $this
     */
    public function setTelephone($telephone)
    {
        $this->container['telephone'] = $telephone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

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
     * Gets web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     *
     * @param string $web web
     *
     * @return $this
     */
    public function setWeb($web)
    {
        $this->container['web'] = $web;

        return $this;
    }

    /**
     * Gets aPE
     *
     * @return string
     */
    public function getAPE()
    {
        return $this->container['aPE'];
    }

    /**
     * Sets aPE
     *
     * @param string $aPE aPE
     *
     * @return $this
     */
    public function setAPE($aPE)
    {
        $this->container['aPE'] = $aPE;

        return $this;
    }

    /**
     * Gets tVAClef
     *
     * @return string
     */
    public function getTVAClef()
    {
        return $this->container['tVAClef'];
    }

    /**
     * Sets tVAClef
     *
     * @param string $tVAClef tVAClef
     *
     * @return $this
     */
    public function setTVAClef($tVAClef)
    {
        $this->container['tVAClef'] = $tVAClef;

        return $this;
    }

    /**
     * Gets tVAPays
     *
     * @return string
     */
    public function getTVAPays()
    {
        return $this->container['tVAPays'];
    }

    /**
     * Sets tVAPays
     *
     * @param string $tVAPays tVAPays
     *
     * @return $this
     */
    public function setTVAPays($tVAPays)
    {
        $this->container['tVAPays'] = $tVAPays;

        return $this;
    }

    /**
     * Gets sIREN
     *
     * @return string
     */
    public function getSIREN()
    {
        return $this->container['sIREN'];
    }

    /**
     * Sets sIREN
     *
     * @param string $sIREN sIREN
     *
     * @return $this
     */
    public function setSIREN($sIREN)
    {
        $this->container['sIREN'] = $sIREN;

        return $this;
    }

    /**
     * Gets nIC
     *
     * @return string
     */
    public function getNIC()
    {
        return $this->container['nIC'];
    }

    /**
     * Sets nIC
     *
     * @param string $nIC nIC
     *
     * @return $this
     */
    public function setNIC($nIC)
    {
        $this->container['nIC'] = $nIC;

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
