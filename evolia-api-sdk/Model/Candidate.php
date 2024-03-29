<?php
/**
 * Candidate
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
 * Candidate Class Doc Comment
 *
 * @category Class
 * @package  Evolia
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Candidate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Candidate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'titre' => 'int',
'nom' => 'string',
'preNom' => 'string',
'idRef' => 'string',
'qualification' => 'string',
'nationalite' => 'string',
'nomJF' => 'string',
'dateNaissance' => '\DateTime',
'telephonePortable' => 'string',
'telephoneDomicile' => 'string',
'email' => 'string',
'web' => 'string',
'numVoie' => 'string',
'bisVoie' => 'string',
'nomVoie' => 'string',
'compVoie' => 'string',
'cP' => 'string',
'commune' => 'string',
'inseeCommune' => 'string',
'numsecu' => 'string',
'numsecuCle' => 'string',
'lieuNaiss' => 'string',
'paysNaiss' => 'string',
'pays' => 'string',
'commentaire' => 'string',
'modePaiement' => 'string',
'rIBEtablissement' => 'string',
'rIBDomiciliation' => 'string',
'rIBTitulaire' => 'string',
'rIBGuichet' => 'string',
'rIBCompte' => 'string',
'rIBCle' => 'string',
'iBAN' => 'string',
'bIC' => 'string',
'creePar' => 'string',
'listeAgences' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'titre' => null,
'nom' => null,
'preNom' => null,
'idRef' => null,
'qualification' => null,
'nationalite' => null,
'nomJF' => null,
'dateNaissance' => 'date-time',
'telephonePortable' => null,
'telephoneDomicile' => null,
'email' => null,
'web' => null,
'numVoie' => null,
'bisVoie' => null,
'nomVoie' => null,
'compVoie' => null,
'cP' => null,
'commune' => null,
'inseeCommune' => null,
'numsecu' => null,
'numsecuCle' => null,
'lieuNaiss' => null,
'paysNaiss' => null,
'pays' => null,
'commentaire' => null,
'modePaiement' => null,
'rIBEtablissement' => null,
'rIBDomiciliation' => null,
'rIBTitulaire' => null,
'rIBGuichet' => null,
'rIBCompte' => null,
'rIBCle' => null,
'iBAN' => null,
'bIC' => null,
'creePar' => null,
'listeAgences' => null    ];

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
        'titre' => 'Titre',
'nom' => 'Nom',
'preNom' => 'PreNom',
'idRef' => 'IdRef',
'qualification' => 'Qualification',
'nationalite' => 'Nationalite',
'nomJF' => 'NomJF',
'dateNaissance' => 'DateNaissance',
'telephonePortable' => 'TelephonePortable',
'telephoneDomicile' => 'TelephoneDomicile',
'email' => 'Email',
'web' => 'Web',
'numVoie' => 'NumVoie',
'bisVoie' => 'BisVoie',
'nomVoie' => 'NomVoie',
'compVoie' => 'CompVoie',
'cP' => 'CP',
'commune' => 'Commune',
'inseeCommune' => 'InseeCommune',
'numsecu' => 'Numsecu',
'numsecuCle' => 'NumsecuCle',
'lieuNaiss' => 'Lieu_Naiss',
'paysNaiss' => 'PaysNaiss',
'pays' => 'Pays',
'commentaire' => 'Commentaire',
'modePaiement' => 'ModePaiement',
'rIBEtablissement' => 'RIB_Etablissement',
'rIBDomiciliation' => 'RIB_Domiciliation',
'rIBTitulaire' => 'RIB_Titulaire',
'rIBGuichet' => 'RIB_Guichet',
'rIBCompte' => 'RIB_Compte',
'rIBCle' => 'RIB_Cle',
'iBAN' => 'IBAN',
'bIC' => 'BIC',
'creePar' => 'CreePar',
'listeAgences' => 'ListeAgences'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'titre' => 'setTitre',
'nom' => 'setNom',
'preNom' => 'setPreNom',
'idRef' => 'setIdRef',
'qualification' => 'setQualification',
'nationalite' => 'setNationalite',
'nomJF' => 'setNomJF',
'dateNaissance' => 'setDateNaissance',
'telephonePortable' => 'setTelephonePortable',
'telephoneDomicile' => 'setTelephoneDomicile',
'email' => 'setEmail',
'web' => 'setWeb',
'numVoie' => 'setNumVoie',
'bisVoie' => 'setBisVoie',
'nomVoie' => 'setNomVoie',
'compVoie' => 'setCompVoie',
'cP' => 'setCP',
'commune' => 'setCommune',
'inseeCommune' => 'setInseeCommune',
'numsecu' => 'setNumsecu',
'numsecuCle' => 'setNumsecuCle',
'lieuNaiss' => 'setLieuNaiss',
'paysNaiss' => 'setPaysNaiss',
'pays' => 'setPays',
'commentaire' => 'setCommentaire',
'modePaiement' => 'setModePaiement',
'rIBEtablissement' => 'setRIBEtablissement',
'rIBDomiciliation' => 'setRIBDomiciliation',
'rIBTitulaire' => 'setRIBTitulaire',
'rIBGuichet' => 'setRIBGuichet',
'rIBCompte' => 'setRIBCompte',
'rIBCle' => 'setRIBCle',
'iBAN' => 'setIBAN',
'bIC' => 'setBIC',
'creePar' => 'setCreePar',
'listeAgences' => 'setListeAgences'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'titre' => 'getTitre',
'nom' => 'getNom',
'preNom' => 'getPreNom',
'idRef' => 'getIdRef',
'qualification' => 'getQualification',
'nationalite' => 'getNationalite',
'nomJF' => 'getNomJF',
'dateNaissance' => 'getDateNaissance',
'telephonePortable' => 'getTelephonePortable',
'telephoneDomicile' => 'getTelephoneDomicile',
'email' => 'getEmail',
'web' => 'getWeb',
'numVoie' => 'getNumVoie',
'bisVoie' => 'getBisVoie',
'nomVoie' => 'getNomVoie',
'compVoie' => 'getCompVoie',
'cP' => 'getCP',
'commune' => 'getCommune',
'inseeCommune' => 'getInseeCommune',
'numsecu' => 'getNumsecu',
'numsecuCle' => 'getNumsecuCle',
'lieuNaiss' => 'getLieuNaiss',
'paysNaiss' => 'getPaysNaiss',
'pays' => 'getPays',
'commentaire' => 'getCommentaire',
'modePaiement' => 'getModePaiement',
'rIBEtablissement' => 'getRIBEtablissement',
'rIBDomiciliation' => 'getRIBDomiciliation',
'rIBTitulaire' => 'getRIBTitulaire',
'rIBGuichet' => 'getRIBGuichet',
'rIBCompte' => 'getRIBCompte',
'rIBCle' => 'getRIBCle',
'iBAN' => 'getIBAN',
'bIC' => 'getBIC',
'creePar' => 'getCreePar',
'listeAgences' => 'getListeAgences'    ];

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

    const TITRE_1 = 1;
const TITRE_2 = 2;
const TITRE_3 = 3;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTitreAllowableValues()
    {
        return [
            self::TITRE_1,
self::TITRE_2,
self::TITRE_3,        ];
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
        $this->container['titre'] = isset($data['titre']) ? $data['titre'] : null;
        $this->container['nom'] = isset($data['nom']) ? $data['nom'] : null;
        $this->container['preNom'] = isset($data['preNom']) ? $data['preNom'] : null;
        $this->container['idRef'] = isset($data['idRef']) ? $data['idRef'] : null;
        $this->container['qualification'] = isset($data['qualification']) ? $data['qualification'] : null;
        $this->container['nationalite'] = isset($data['nationalite']) ? $data['nationalite'] : null;
        $this->container['nomJF'] = isset($data['nomJF']) ? $data['nomJF'] : null;
        $this->container['dateNaissance'] = isset($data['dateNaissance']) ? $data['dateNaissance'] : null;
        $this->container['telephonePortable'] = isset($data['telephonePortable']) ? $data['telephonePortable'] : null;
        $this->container['telephoneDomicile'] = isset($data['telephoneDomicile']) ? $data['telephoneDomicile'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['web'] = isset($data['web']) ? $data['web'] : null;
        $this->container['numVoie'] = isset($data['numVoie']) ? $data['numVoie'] : null;
        $this->container['bisVoie'] = isset($data['bisVoie']) ? $data['bisVoie'] : null;
        $this->container['nomVoie'] = isset($data['nomVoie']) ? $data['nomVoie'] : null;
        $this->container['compVoie'] = isset($data['compVoie']) ? $data['compVoie'] : null;
        $this->container['cP'] = isset($data['cP']) ? $data['cP'] : null;
        $this->container['commune'] = isset($data['commune']) ? $data['commune'] : null;
        $this->container['inseeCommune'] = isset($data['inseeCommune']) ? $data['inseeCommune'] : null;
        $this->container['numsecu'] = isset($data['numsecu']) ? $data['numsecu'] : null;
        $this->container['numsecuCle'] = isset($data['numsecuCle']) ? $data['numsecuCle'] : null;
        $this->container['lieuNaiss'] = isset($data['lieuNaiss']) ? $data['lieuNaiss'] : null;
        $this->container['paysNaiss'] = isset($data['paysNaiss']) ? $data['paysNaiss'] : null;
        $this->container['pays'] = isset($data['pays']) ? $data['pays'] : null;
        $this->container['commentaire'] = isset($data['commentaire']) ? $data['commentaire'] : null;
        $this->container['modePaiement'] = isset($data['modePaiement']) ? $data['modePaiement'] : null;
        $this->container['rIBEtablissement'] = isset($data['rIBEtablissement']) ? $data['rIBEtablissement'] : null;
        $this->container['rIBDomiciliation'] = isset($data['rIBDomiciliation']) ? $data['rIBDomiciliation'] : null;
        $this->container['rIBTitulaire'] = isset($data['rIBTitulaire']) ? $data['rIBTitulaire'] : null;
        $this->container['rIBGuichet'] = isset($data['rIBGuichet']) ? $data['rIBGuichet'] : null;
        $this->container['rIBCompte'] = isset($data['rIBCompte']) ? $data['rIBCompte'] : null;
        $this->container['rIBCle'] = isset($data['rIBCle']) ? $data['rIBCle'] : null;
        $this->container['iBAN'] = isset($data['iBAN']) ? $data['iBAN'] : null;
        $this->container['bIC'] = isset($data['bIC']) ? $data['bIC'] : null;
        $this->container['creePar'] = isset($data['creePar']) ? $data['creePar'] : null;
        $this->container['listeAgences'] = isset($data['listeAgences']) ? $data['listeAgences'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['titre'] === null) {
            $invalidProperties[] = "'titre' can't be null";
        }
        $allowedValues = $this->getTitreAllowableValues();
        if (!is_null($this->container['titre']) && !in_array($this->container['titre'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'titre', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['nom'] === null) {
            $invalidProperties[] = "'nom' can't be null";
        }
        if ($this->container['preNom'] === null) {
            $invalidProperties[] = "'preNom' can't be null";
        }
        if ($this->container['qualification'] === null) {
            $invalidProperties[] = "'qualification' can't be null";
        }
        if ($this->container['nationalite'] === null) {
            $invalidProperties[] = "'nationalite' can't be null";
        }
        if ($this->container['dateNaissance'] === null) {
            $invalidProperties[] = "'dateNaissance' can't be null";
        }
        if ($this->container['listeAgences'] === null) {
            $invalidProperties[] = "'listeAgences' can't be null";
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
     * Gets titre
     *
     * @return int
     */
    public function getTitre()
    {
        return $this->container['titre'];
    }

    /**
     * Sets titre
     *
     * @param int $titre Value 1 for Sir, 2 for Madam, 3 for Miss
     *
     * @return $this
     */
    public function setTitre($titre)
    {
        $allowedValues = $this->getTitreAllowableValues();
        if (!in_array($titre, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'titre', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['titre'] = $titre;

        return $this;
    }

    /**
     * Gets nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->container['nom'];
    }

    /**
     * Sets nom
     *
     * @param string $nom nom
     *
     * @return $this
     */
    public function setNom($nom)
    {
        $this->container['nom'] = $nom;

        return $this;
    }

    /**
     * Gets preNom
     *
     * @return string
     */
    public function getPreNom()
    {
        return $this->container['preNom'];
    }

    /**
     * Sets preNom
     *
     * @param string $preNom preNom
     *
     * @return $this
     */
    public function setPreNom($preNom)
    {
        $this->container['preNom'] = $preNom;

        return $this;
    }

    /**
     * Gets idRef
     *
     * @return string
     */
    public function getIdRef()
    {
        return $this->container['idRef'];
    }

    /**
     * Sets idRef
     *
     * @param string $idRef idRef
     *
     * @return $this
     */
    public function setIdRef($idRef)
    {
        $this->container['idRef'] = $idRef;

        return $this;
    }

    /**
     * Gets qualification
     *
     * @return string
     */
    public function getQualification()
    {
        return $this->container['qualification'];
    }

    /**
     * Sets qualification
     *
     * @param string $qualification qualification
     *
     * @return $this
     */
    public function setQualification($qualification)
    {
        $this->container['qualification'] = $qualification;

        return $this;
    }

    /**
     * Gets nationalite
     *
     * @return string
     */
    public function getNationalite()
    {
        return $this->container['nationalite'];
    }

    /**
     * Sets nationalite
     *
     * @param string $nationalite Country code
     *
     * @return $this
     */
    public function setNationalite($nationalite)
    {
        $this->container['nationalite'] = $nationalite;

        return $this;
    }

    /**
     * Gets nomJF
     *
     * @return string
     */
    public function getNomJF()
    {
        return $this->container['nomJF'];
    }

    /**
     * Sets nomJF
     *
     * @param string $nomJF nomJF
     *
     * @return $this
     */
    public function setNomJF($nomJF)
    {
        $this->container['nomJF'] = $nomJF;

        return $this;
    }

    /**
     * Gets dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->container['dateNaissance'];
    }

    /**
     * Sets dateNaissance
     *
     * @param \DateTime $dateNaissance DateTime format 1970-01-01T00:00:00.000Z
     *
     * @return $this
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->container['dateNaissance'] = $dateNaissance;

        return $this;
    }

    /**
     * Gets telephonePortable
     *
     * @return string
     */
    public function getTelephonePortable()
    {
        return $this->container['telephonePortable'];
    }

    /**
     * Sets telephonePortable
     *
     * @param string $telephonePortable telephonePortable
     *
     * @return $this
     */
    public function setTelephonePortable($telephonePortable)
    {
        $this->container['telephonePortable'] = $telephonePortable;

        return $this;
    }

    /**
     * Gets telephoneDomicile
     *
     * @return string
     */
    public function getTelephoneDomicile()
    {
        return $this->container['telephoneDomicile'];
    }

    /**
     * Sets telephoneDomicile
     *
     * @param string $telephoneDomicile telephoneDomicile
     *
     * @return $this
     */
    public function setTelephoneDomicile($telephoneDomicile)
    {
        $this->container['telephoneDomicile'] = $telephoneDomicile;

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
     * Gets numVoie
     *
     * @return string
     */
    public function getNumVoie()
    {
        return $this->container['numVoie'];
    }

    /**
     * Sets numVoie
     *
     * @param string $numVoie numVoie
     *
     * @return $this
     */
    public function setNumVoie($numVoie)
    {
        $this->container['numVoie'] = $numVoie;

        return $this;
    }

    /**
     * Gets bisVoie
     *
     * @return string
     */
    public function getBisVoie()
    {
        return $this->container['bisVoie'];
    }

    /**
     * Sets bisVoie
     *
     * @param string $bisVoie bisVoie
     *
     * @return $this
     */
    public function setBisVoie($bisVoie)
    {
        $this->container['bisVoie'] = $bisVoie;

        return $this;
    }

    /**
     * Gets nomVoie
     *
     * @return string
     */
    public function getNomVoie()
    {
        return $this->container['nomVoie'];
    }

    /**
     * Sets nomVoie
     *
     * @param string $nomVoie nomVoie
     *
     * @return $this
     */
    public function setNomVoie($nomVoie)
    {
        $this->container['nomVoie'] = $nomVoie;

        return $this;
    }

    /**
     * Gets compVoie
     *
     * @return string
     */
    public function getCompVoie()
    {
        return $this->container['compVoie'];
    }

    /**
     * Sets compVoie
     *
     * @param string $compVoie compVoie
     *
     * @return $this
     */
    public function setCompVoie($compVoie)
    {
        $this->container['compVoie'] = $compVoie;

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
     * Gets inseeCommune
     *
     * @return string
     */
    public function getInseeCommune()
    {
        return $this->container['inseeCommune'];
    }

    /**
     * Sets inseeCommune
     *
     * @param string $inseeCommune inseeCommune
     *
     * @return $this
     */
    public function setInseeCommune($inseeCommune)
    {
        $this->container['inseeCommune'] = $inseeCommune;

        return $this;
    }

    /**
     * Gets numsecu
     *
     * @return string
     */
    public function getNumsecu()
    {
        return $this->container['numsecu'];
    }

    /**
     * Sets numsecu
     *
     * @param string $numsecu numsecu
     *
     * @return $this
     */
    public function setNumsecu($numsecu)
    {
        $this->container['numsecu'] = $numsecu;

        return $this;
    }

    /**
     * Gets numsecuCle
     *
     * @return string
     */
    public function getNumsecuCle()
    {
        return $this->container['numsecuCle'];
    }

    /**
     * Sets numsecuCle
     *
     * @param string $numsecuCle numsecuCle
     *
     * @return $this
     */
    public function setNumsecuCle($numsecuCle)
    {
        $this->container['numsecuCle'] = $numsecuCle;

        return $this;
    }

    /**
     * Gets lieuNaiss
     *
     * @return string
     */
    public function getLieuNaiss()
    {
        return $this->container['lieuNaiss'];
    }

    /**
     * Sets lieuNaiss
     *
     * @param string $lieuNaiss lieuNaiss
     *
     * @return $this
     */
    public function setLieuNaiss($lieuNaiss)
    {
        $this->container['lieuNaiss'] = $lieuNaiss;

        return $this;
    }

    /**
     * Gets paysNaiss
     *
     * @return string
     */
    public function getPaysNaiss()
    {
        return $this->container['paysNaiss'];
    }

    /**
     * Sets paysNaiss
     *
     * @param string $paysNaiss paysNaiss
     *
     * @return $this
     */
    public function setPaysNaiss($paysNaiss)
    {
        $this->container['paysNaiss'] = $paysNaiss;

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
     * Gets modePaiement
     *
     * @return string
     */
    public function getModePaiement()
    {
        return $this->container['modePaiement'];
    }

    /**
     * Sets modePaiement
     *
     * @param string $modePaiement modePaiement
     *
     * @return $this
     */
    public function setModePaiement($modePaiement)
    {
        $this->container['modePaiement'] = $modePaiement;

        return $this;
    }

    /**
     * Gets rIBEtablissement
     *
     * @return string
     */
    public function getRIBEtablissement()
    {
        return $this->container['rIBEtablissement'];
    }

    /**
     * Sets rIBEtablissement
     *
     * @param string $rIBEtablissement rIBEtablissement
     *
     * @return $this
     */
    public function setRIBEtablissement($rIBEtablissement)
    {
        $this->container['rIBEtablissement'] = $rIBEtablissement;

        return $this;
    }

    /**
     * Gets rIBDomiciliation
     *
     * @return string
     */
    public function getRIBDomiciliation()
    {
        return $this->container['rIBDomiciliation'];
    }

    /**
     * Sets rIBDomiciliation
     *
     * @param string $rIBDomiciliation rIBDomiciliation
     *
     * @return $this
     */
    public function setRIBDomiciliation($rIBDomiciliation)
    {
        $this->container['rIBDomiciliation'] = $rIBDomiciliation;

        return $this;
    }

    /**
     * Gets rIBTitulaire
     *
     * @return string
     */
    public function getRIBTitulaire()
    {
        return $this->container['rIBTitulaire'];
    }

    /**
     * Sets rIBTitulaire
     *
     * @param string $rIBTitulaire rIBTitulaire
     *
     * @return $this
     */
    public function setRIBTitulaire($rIBTitulaire)
    {
        $this->container['rIBTitulaire'] = $rIBTitulaire;

        return $this;
    }

    /**
     * Gets rIBGuichet
     *
     * @return string
     */
    public function getRIBGuichet()
    {
        return $this->container['rIBGuichet'];
    }

    /**
     * Sets rIBGuichet
     *
     * @param string $rIBGuichet rIBGuichet
     *
     * @return $this
     */
    public function setRIBGuichet($rIBGuichet)
    {
        $this->container['rIBGuichet'] = $rIBGuichet;

        return $this;
    }

    /**
     * Gets rIBCompte
     *
     * @return string
     */
    public function getRIBCompte()
    {
        return $this->container['rIBCompte'];
    }

    /**
     * Sets rIBCompte
     *
     * @param string $rIBCompte rIBCompte
     *
     * @return $this
     */
    public function setRIBCompte($rIBCompte)
    {
        $this->container['rIBCompte'] = $rIBCompte;

        return $this;
    }

    /**
     * Gets rIBCle
     *
     * @return string
     */
    public function getRIBCle()
    {
        return $this->container['rIBCle'];
    }

    /**
     * Sets rIBCle
     *
     * @param string $rIBCle rIBCle
     *
     * @return $this
     */
    public function setRIBCle($rIBCle)
    {
        $this->container['rIBCle'] = $rIBCle;

        return $this;
    }

    /**
     * Gets iBAN
     *
     * @return string
     */
    public function getIBAN()
    {
        return $this->container['iBAN'];
    }

    /**
     * Sets iBAN
     *
     * @param string $iBAN iBAN
     *
     * @return $this
     */
    public function setIBAN($iBAN)
    {
        $this->container['iBAN'] = $iBAN;

        return $this;
    }

    /**
     * Gets bIC
     *
     * @return string
     */
    public function getBIC()
    {
        return $this->container['bIC'];
    }

    /**
     * Sets bIC
     *
     * @param string $bIC bIC
     *
     * @return $this
     */
    public function setBIC($bIC)
    {
        $this->container['bIC'] = $bIC;

        return $this;
    }

    /**
     * Gets creePar
     *
     * @return string
     */
    public function getCreePar()
    {
        return $this->container['creePar'];
    }

    /**
     * Sets creePar
     *
     * @param string $creePar Indication about the creator of the interim
     *
     * @return $this
     */
    public function setCreePar($creePar)
    {
        $this->container['creePar'] = $creePar;

        return $this;
    }

    /**
     * Gets listeAgences
     *
     * @return string[]
     */
    public function getListeAgences()
    {
        return $this->container['listeAgences'];
    }

    /**
     * Sets listeAgences
     *
     * @param string[] $listeAgences listeAgences
     *
     * @return $this
     */
    public function setListeAgences($listeAgences)
    {
        $this->container['listeAgences'] = $listeAgences;

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
