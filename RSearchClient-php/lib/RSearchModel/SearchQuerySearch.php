<?php
/**
 * SearchQuerySearch
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
 * OpenAPI spec version: 1.1.0
 * Contact: team@parallelstack.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
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
 * SearchQuerySearch Class Doc Comment
 *
 * @category Class
 * @package  RSearch\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SearchQuerySearch implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SearchQuery_search';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'query' => 'string',
        'fuzzy' => 'float',
        'resultFields' => 'string[]',
        'searchFields' => 'string[]',
        'pageNum' => 'float',
        'pageCount' => 'float',
        'filters' => 'object',
        'aggregations' => '\RSearch\Client\RSearchModel\SearchQuerySearchAggregations[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'query' => null,
        'fuzzy' => null,
        'resultFields' => null,
        'searchFields' => null,
        'pageNum' => null,
        'pageCount' => null,
        'filters' => null,
        'aggregations' => null
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
        'query' => 'query',
        'fuzzy' => 'fuzzy',
        'resultFields' => 'result_fields',
        'searchFields' => 'search_fields',
        'pageNum' => 'page_num',
        'pageCount' => 'page_count',
        'filters' => 'filters',
        'aggregations' => 'aggregations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'query' => 'setQuery',
        'fuzzy' => 'setFuzzy',
        'resultFields' => 'setResultFields',
        'searchFields' => 'setSearchFields',
        'pageNum' => 'setPageNum',
        'pageCount' => 'setPageCount',
        'filters' => 'setFilters',
        'aggregations' => 'setAggregations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'query' => 'getQuery',
        'fuzzy' => 'getFuzzy',
        'resultFields' => 'getResultFields',
        'searchFields' => 'getSearchFields',
        'pageNum' => 'getPageNum',
        'pageCount' => 'getPageCount',
        'filters' => 'getFilters',
        'aggregations' => 'getAggregations'
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
        $this->container['query'] = isset($data['query']) ? $data['query'] : null;
        $this->container['fuzzy'] = isset($data['fuzzy']) ? $data['fuzzy'] : null;
        $this->container['resultFields'] = isset($data['resultFields']) ? $data['resultFields'] : null;
        $this->container['searchFields'] = isset($data['searchFields']) ? $data['searchFields'] : null;
        $this->container['pageNum'] = isset($data['pageNum']) ? $data['pageNum'] : null;
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['aggregations'] = isset($data['aggregations']) ? $data['aggregations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['query'] === null) {
            $invalidProperties[] = "'query' can't be null";
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

        if ($this->container['query'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets fuzzy
     *
     * @return float
     */
    public function getFuzzy()
    {
        return $this->container['fuzzy'];
    }

    /**
     * Sets fuzzy
     *
     * @param float $fuzzy fuzzy
     *
     * @return $this
     */
    public function setFuzzy($fuzzy)
    {
        $this->container['fuzzy'] = $fuzzy;

        return $this;
    }

    /**
     * Gets resultFields
     *
     * @return string[]
     */
    public function getResultFields()
    {
        return $this->container['resultFields'];
    }

    /**
     * Sets resultFields
     *
     * @param string[] $resultFields resultFields
     *
     * @return $this
     */
    public function setResultFields($resultFields)
    {
        $this->container['resultFields'] = $resultFields;

        return $this;
    }

    /**
     * Gets searchFields
     *
     * @return string[]
     */
    public function getSearchFields()
    {
        return $this->container['searchFields'];
    }

    /**
     * Sets searchFields
     *
     * @param string[] $searchFields searchFields
     *
     * @return $this
     */
    public function setSearchFields($searchFields)
    {
        $this->container['searchFields'] = $searchFields;

        return $this;
    }

    /**
     * Gets pageNum
     *
     * @return float
     */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
     * Sets pageNum
     *
     * @param float $pageNum pageNum
     *
     * @return $this
     */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;

        return $this;
    }

    /**
     * Gets pageCount
     *
     * @return float
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
     * Sets pageCount
     *
     * @param float $pageCount pageCount
     *
     * @return $this
     */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return object
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param object $filters filters
     *
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets aggregations
     *
     * @return \RSearch\Client\RSearchModel\SearchQuerySearchAggregations[]
     */
    public function getAggregations()
    {
        return $this->container['aggregations'];
    }

    /**
     * Sets aggregations
     *
     * @param \RSearch\Client\RSearchModel\SearchQuerySearchAggregations[] $aggregations aggregations
     *
     * @return $this
     */
    public function setAggregations($aggregations)
    {
        $this->container['aggregations'] = $aggregations;

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


