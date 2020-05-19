<?php
/**
 * ShippingCostOverride
 *
 * PHP version 5
 *
 * @category Class
 * @package  EbayInventoryApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.9.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EbayInventoryApi\Model;

use \ArrayAccess;
use \EbayInventoryApi\ObjectSerializer;

/**
 * ShippingCostOverride Class Doc Comment
 *
 * @category Class
 * @description This type is used if the seller wants to override the shipping costs or surcharge associated with a specific domestic or international shipping service option defined in the fulfillment listing policy that is being applied toward the offer. The shipping-related costs that can be overridden include the shipping cost to ship one item, the shipping cost to ship each additional item (if multiple quantity are purchased), and the shipping surcharge applied to the shipping service option.
 * @package  EbayInventoryApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShippingCostOverride implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ShippingCostOverride';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'additional_shipping_cost' => '\EbayInventoryApi\Model\Amount',
        'priority' => 'int',
        'shipping_cost' => '\EbayInventoryApi\Model\Amount',
        'shipping_service_type' => 'string',
        'surcharge' => '\EbayInventoryApi\Model\Amount'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'additional_shipping_cost' => null,
        'priority' => 'int32',
        'shipping_cost' => null,
        'shipping_service_type' => null,
        'surcharge' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'additional_shipping_cost' => 'additionalShippingCost',
        'priority' => 'priority',
        'shipping_cost' => 'shippingCost',
        'shipping_service_type' => 'shippingServiceType',
        'surcharge' => 'surcharge'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_shipping_cost' => 'setAdditionalShippingCost',
        'priority' => 'setPriority',
        'shipping_cost' => 'setShippingCost',
        'shipping_service_type' => 'setShippingServiceType',
        'surcharge' => 'setSurcharge'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_shipping_cost' => 'getAdditionalShippingCost',
        'priority' => 'getPriority',
        'shipping_cost' => 'getShippingCost',
        'shipping_service_type' => 'getShippingServiceType',
        'surcharge' => 'getSurcharge'
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
        return self::$openAPIModelName;
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
        $this->container['additional_shipping_cost'] = isset($data['additional_shipping_cost']) ? $data['additional_shipping_cost'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['shipping_service_type'] = isset($data['shipping_service_type']) ? $data['shipping_service_type'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
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
     * Gets additional_shipping_cost
     *
     * @return \EbayInventoryApi\Model\Amount|null
     */
    public function getAdditionalShippingCost()
    {
        return $this->container['additional_shipping_cost'];
    }

    /**
     * Sets additional_shipping_cost
     *
     * @param \EbayInventoryApi\Model\Amount|null $additional_shipping_cost additional_shipping_cost
     *
     * @return $this
     */
    public function setAdditionalShippingCost($additional_shipping_cost)
    {
        $this->container['additional_shipping_cost'] = $additional_shipping_cost;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int|null
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int|null $priority The integer value input into this field, along with the shippingServiceType value, sets which domestic or international shipping service option in the fulfillment policy will be modified with updated shipping costs. Specifically, the shippingCostOverrides.shippingServiceType value in a createOffer or updateOffer call must match the shippingOptions.optionType value in a fulfillment listing policy, and the shippingCostOverrides.priority value in a createOffer or updateOffer call must match the shippingOptions.shippingServices.sortOrderId value in a fulfillment listing policy. This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden.
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \EbayInventoryApi\Model\Amount|null
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \EbayInventoryApi\Model\Amount|null $shipping_cost shipping_cost
     *
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets shipping_service_type
     *
     * @return string|null
     */
    public function getShippingServiceType()
    {
        return $this->container['shipping_service_type'];
    }

    /**
     * Sets shipping_service_type
     *
     * @param string|null $shipping_service_type This enumerated value indicates whether the shipping service specified in the priority field is a domestic or an international shipping service option. To override the shipping costs for a specific domestic shipping service in the fulfillment listing policy, this field should be set to DOMESTIC, and to override the shipping costs for each international shipping service, this field should be set to INTERNATIONAL. This value, along with priority value, sets which domestic or international shipping service option in the fulfillment policy that will be modified with updated shipping costs. Specifically, the shippingCostOverrides.shippingServiceType value in a createOffer or updateOffer call must match the shippingOptions.optionType value in a fulfillment listing policy, and the shippingCostOverrides.priority value in a createOffer or updateOffer call must match the shippingOptions.shippingServices.sortOrderId value in a fulfillment listing policy. This field is always required when overriding the shipping costs of a shipping service option, and will be always be returned for each shipping service option whose costs are being overridden. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/inventory/types/ShippingServiceTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setShippingServiceType($shipping_service_type)
    {
        $this->container['shipping_service_type'] = $shipping_service_type;

        return $this;
    }

    /**
     * Gets surcharge
     *
     * @return \EbayInventoryApi\Model\Amount|null
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     *
     * @param \EbayInventoryApi\Model\Amount|null $surcharge surcharge
     *
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


