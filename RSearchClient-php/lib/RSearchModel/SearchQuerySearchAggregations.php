<?php
/**
 * SearchQuerySearchAggregations
 *
 * PHP version 5
 *
 * @category Class
 * @package  RSearch\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ParallelStack RSearch API
 *
 * REST API Specification for ParallelStack RSearch API
 *
 * OpenAPI spec version: 1.3.0
 * Contact: team@parallelstack.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RSearch\Client\RSearchModel;

use \ArrayAccess;
use \RSearch\Client\ObjectSerializer;

/**
 * SearchQuerySearchAggregations Class Doc Comment
 *
 * @category Class
 * @package  RSearch\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchQuerySearchAggregations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchQuery_search_aggregations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fieldName' => 'string',
        'aggType' => 'string',
        'termAggSize' => 'float',
        'range' => 'object[]',
        'origin' => 'object[]',
        'buckets' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fieldName' => null,
        'aggType' => null,
        'termAggSize' => null,
        'range' => null,
        'origin' => null,
        'buckets' => null
    ];

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
        'fieldName' => 'field_name',
        'aggType' => 'agg_type',
        'termAggSize' => 'term_agg_size',
        'range' => 'range',
        'origin' => 'origin',
        'buckets' => 'buckets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fieldName' => 'setFieldName',
        'aggType' => 'setAggType',
        'termAggSize' => 'setTermAggSize',
        'range' => 'setRange',
        'origin' => 'setOrigin',
        'buckets' => 'setBuckets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fieldName' => 'getFieldName',
        'aggType' => 'getAggType',
        'termAggSize' => 'getTermAggSize',
        'range' => 'getRange',
        'origin' => 'getOrigin',
        'buckets' => 'getBuckets'
    ];

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

    const AGG_TYPE_TERM = 'term';
    const AGG_TYPE_RANGE = 'range';
    const AGG_TYPE_HISTOGRAM = 'histogram';
    const AGG_TYPE_LOCATION = 'location';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAggTypeAllowableValues()
    {
        return [
            self::AGG_TYPE_TERM,
            self::AGG_TYPE_RANGE,
            self::AGG_TYPE_HISTOGRAM,
            self::AGG_TYPE_LOCATION,
        ];
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
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['aggType'] = isset($data['aggType']) ? $data['aggType'] : null;
        $this->container['termAggSize'] = isset($data['termAggSize']) ? $data['termAggSize'] : null;
        $this->container['range'] = isset($data['range']) ? $data['range'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['buckets'] = isset($data['buckets']) ? $data['buckets'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fieldName'] === null) {
            $invalidProperties[] = "'fieldName' can't be null";
        }
        if ($this->container['aggType'] === null) {
            $invalidProperties[] = "'aggType' can't be null";
        }
        $allowedValues = $this->getAggTypeAllowableValues();
        if (!in_array($this->container['aggType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'aggType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['fieldName'] === null) {
            return false;
        }
        if ($this->container['aggType'] === null) {
            return false;
        }
        $allowedValues = $this->getAggTypeAllowableValues();
        if (!in_array($this->container['aggType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
     * Sets fieldName
     *
     * @param string $fieldName fieldName
     *
     * @return $this
     */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;

        return $this;
    }

    /**
     * Gets aggType
     *
     * @return string
     */
    public function getAggType()
    {
        return $this->container['aggType'];
    }

    /**
     * Sets aggType
     *
     * @param string $aggType aggType
     *
     * @return $this
     */
    public function setAggType($aggType)
    {
        $allowedValues = $this->getAggTypeAllowableValues();
        if (!in_array($aggType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'aggType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['aggType'] = $aggType;

        return $this;
    }

    /**
     * Gets termAggSize
     *
     * @return float
     */
    public function getTermAggSize()
    {
        return $this->container['termAggSize'];
    }

    /**
     * Sets termAggSize
     *
     * @param float $termAggSize termAggSize
     *
     * @return $this
     */
    public function setTermAggSize($termAggSize)
    {
        $this->container['termAggSize'] = $termAggSize;

        return $this;
    }

    /**
     * Gets range
     *
     * @return object[]
     */
    public function getRange()
    {
        return $this->container['range'];
    }

    /**
     * Sets range
     *
     * @param object[] $range range
     *
     * @return $this
     */
    public function setRange($range)
    {
        $this->container['range'] = $range;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return object[]
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param object[] $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets buckets
     *
     * @return float
     */
    public function getBuckets()
    {
        return $this->container['buckets'];
    }

    /**
     * Sets buckets
     *
     * @param float $buckets buckets
     *
     * @return $this
     */
    public function setBuckets($buckets)
    {
        $this->container['buckets'] = $buckets;

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


