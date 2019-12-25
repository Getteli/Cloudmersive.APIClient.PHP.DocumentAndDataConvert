<?php
/**
 * XmlRemoveWithXPathResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * convertapi
 *
 * Convert API lets you effortlessly convert file formats and types.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * XmlRemoveWithXPathResult Class Doc Comment
 *
 * @category Class
 * @description Result of performing a filter operation on XML input using XPath
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class XmlRemoveWithXPathResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'XmlRemoveWithXPathResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'successful' => 'bool',
        'resulting_xml_document' => 'string',
        'xml_nodes_removed' => 'string[]',
        'nodes_removed_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'successful' => null,
        'resulting_xml_document' => null,
        'xml_nodes_removed' => null,
        'nodes_removed_count' => 'int32'
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
        'successful' => 'Successful',
        'resulting_xml_document' => 'ResultingXmlDocument',
        'xml_nodes_removed' => 'XmlNodesRemoved',
        'nodes_removed_count' => 'NodesRemovedCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'successful' => 'setSuccessful',
        'resulting_xml_document' => 'setResultingXmlDocument',
        'xml_nodes_removed' => 'setXmlNodesRemoved',
        'nodes_removed_count' => 'setNodesRemovedCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'successful' => 'getSuccessful',
        'resulting_xml_document' => 'getResultingXmlDocument',
        'xml_nodes_removed' => 'getXmlNodesRemoved',
        'nodes_removed_count' => 'getNodesRemovedCount'
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
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['resulting_xml_document'] = isset($data['resulting_xml_document']) ? $data['resulting_xml_document'] : null;
        $this->container['xml_nodes_removed'] = isset($data['xml_nodes_removed']) ? $data['xml_nodes_removed'] : null;
        $this->container['nodes_removed_count'] = isset($data['nodes_removed_count']) ? $data['nodes_removed_count'] : null;
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

        return true;
    }


    /**
     * Gets successful
     *
     * @return bool
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     *
     * @param bool $successful True if the operation was successful, false otherwise
     *
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets resulting_xml_document
     *
     * @return string
     */
    public function getResultingXmlDocument()
    {
        return $this->container['resulting_xml_document'];
    }

    /**
     * Sets resulting_xml_document
     *
     * @param string $resulting_xml_document Resulting, modified XML document with matching nodes removed as a string
     *
     * @return $this
     */
    public function setResultingXmlDocument($resulting_xml_document)
    {
        $this->container['resulting_xml_document'] = $resulting_xml_document;

        return $this;
    }

    /**
     * Gets xml_nodes_removed
     *
     * @return string[]
     */
    public function getXmlNodesRemoved()
    {
        return $this->container['xml_nodes_removed'];
    }

    /**
     * Sets xml_nodes_removed
     *
     * @param string[] $xml_nodes_removed Matching selected XML nodes as strings
     *
     * @return $this
     */
    public function setXmlNodesRemoved($xml_nodes_removed)
    {
        $this->container['xml_nodes_removed'] = $xml_nodes_removed;

        return $this;
    }

    /**
     * Gets nodes_removed_count
     *
     * @return int
     */
    public function getNodesRemovedCount()
    {
        return $this->container['nodes_removed_count'];
    }

    /**
     * Sets nodes_removed_count
     *
     * @param int $nodes_removed_count Count of the matching results
     *
     * @return $this
     */
    public function setNodesRemovedCount($nodes_removed_count)
    {
        $this->container['nodes_removed_count'] = $nodes_removed_count;

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


