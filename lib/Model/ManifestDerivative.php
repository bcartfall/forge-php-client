<?php
/**
 * ManifestDerivative
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Client\Model;

use \ArrayAccess;

/**
 * ManifestDerivative Class Doc Comment
 *
 * @category    Class
 * @description Requested output files for the source file URN
 * @package     Autodesk\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ManifestDerivative implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'manifest-derivative';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'has_thumbnail' => 'bool',
        'output_type' => 'string',
        'progress' => 'string',
        'status' => 'string',
        'children' => '\Autodesk\Client\Model\ManifestChildren[]'
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
        'name' => 'name',
        'has_thumbnail' => 'hasThumbnail',
        'output_type' => 'outputType',
        'progress' => 'progress',
        'status' => 'status',
        'children' => 'children'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'has_thumbnail' => 'setHasThumbnail',
        'output_type' => 'setOutputType',
        'progress' => 'setProgress',
        'status' => 'setStatus',
        'children' => 'setChildren'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'has_thumbnail' => 'getHasThumbnail',
        'output_type' => 'getOutputType',
        'progress' => 'getProgress',
        'status' => 'getStatus',
        'children' => 'getChildren'
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

    const OUTPUT_TYPE_STL = 'stl';
    const OUTPUT_TYPE_STEP = 'step';
    const OUTPUT_TYPE_IGES = 'iges';
    const OUTPUT_TYPE_OBJ = 'obj';
    const OUTPUT_TYPE_SVF = 'svf';
    const OUTPUT_TYPE_THUMBNAIL = 'thumbnail';
    const STATUS_PENDING = 'pending';
    const STATUS_INPROGRESS = 'inprogress';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAILED = 'failed';
    const STATUS_TIMEOUT = 'timeout';
    const STATUS_PARTIALSUCCESS = 'partialsuccess';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getOutputTypeAllowableValues()
    {
        return [
            self::OUTPUT_TYPE_STL,
            self::OUTPUT_TYPE_STEP,
            self::OUTPUT_TYPE_IGES,
            self::OUTPUT_TYPE_OBJ,
            self::OUTPUT_TYPE_SVF,
            self::OUTPUT_TYPE_THUMBNAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_INPROGRESS,
            self::STATUS_SUCCESS,
            self::STATUS_FAILED,
            self::STATUS_TIMEOUT,
            self::STATUS_PARTIALSUCCESS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['has_thumbnail'] = isset($data['has_thumbnail']) ? $data['has_thumbnail'] : null;
        $this->container['output_type'] = isset($data['output_type']) ? $data['output_type'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['has_thumbnail'] === null) {
            $invalid_properties[] = "'has_thumbnail' can't be null";
        }
        $allowed_values = ["stl", "step", "iges", "obj", "svf", "thumbnail"];
        if (!in_array($this->container['output_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'output_type', must be one of 'stl', 'step', 'iges', 'obj', 'svf', 'thumbnail'.";
        }

        if ($this->container['progress'] === null) {
            $invalid_properties[] = "'progress' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = ["pending", "inprogress", "success", "failed", "timeout", "partialsuccess"];
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of 'pending', 'inprogress', 'success', 'failed', 'timeout', 'partialsuccess'.";
        }

        if ($this->container['children'] === null) {
            $invalid_properties[] = "'children' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['has_thumbnail'] === null) {
            return false;
        }
        $allowed_values = ["stl", "step", "iges", "obj", "svf", "thumbnail"];
        if (!in_array($this->container['output_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['progress'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = ["pending", "inprogress", "success", "failed", "timeout", "partialsuccess"];
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['children'] === null) {
            return false;
        }
        return true;
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
     * @param string $name Output file type
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets has_thumbnail
     * @return bool
     */
    public function getHasThumbnail()
    {
        return $this->container['has_thumbnail'];
    }

    /**
     * Sets has_thumbnail
     * @param bool $has_thumbnail Indicates if a thumbnail has been generated
     * @return $this
     */
    public function setHasThumbnail($has_thumbnail)
    {
        $this->container['has_thumbnail'] = $has_thumbnail;

        return $this;
    }

    /**
     * Gets output_type
     * @return string
     */
    public function getOutputType()
    {
        return $this->container['output_type'];
    }

    /**
     * Sets output_type
     * @param string $output_type
     * @return $this
     */
    public function setOutputType($output_type)
    {
        $allowed_values = array('stl', 'step', 'iges', 'obj', 'svf', 'thumbnail');
        if (!is_null($output_type) && (!in_array($output_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'output_type', must be one of 'stl', 'step', 'iges', 'obj', 'svf', 'thumbnail'");
        }
        $this->container['output_type'] = $output_type;

        return $this;
    }

    /**
     * Gets progress
     * @return string
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     * @param string $progress Translation progress for requested entity
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the requested entity; possible values are: `pending`, `success`, `inprogress`, `failed`, `timeout` and `partialsuccess`
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('pending', 'inprogress', 'success', 'failed', 'timeout', 'partialsuccess');
        if ((!in_array($status, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'pending', 'inprogress', 'success', 'failed', 'timeout', 'partialsuccess'");
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets children
     * @return \Autodesk\Client\Model\ManifestChildren[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \Autodesk\Client\Model\ManifestChildren[] $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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
            return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


