<?php
/**
 * FulfillmentOrder
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutbound;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FulfillmentOrder Class Doc Comment
 *
 * @category Class
 * @description General information about a fulfillment order, including its status.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class FulfillmentOrder implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FulfillmentOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'seller_fulfillment_order_id' => 'string',
        'marketplace_id' => 'string',
        'displayable_order_id' => 'string',
        'displayable_order_date' => 'string',
        'displayable_order_comment' => 'string',
        'shipping_speed_category' => '\SellingPartnerApi\Model\FbaOutbound\ShippingSpeedCategory',
        'delivery_window' => '\SellingPartnerApi\Model\FbaOutbound\DeliveryWindow',
        'destination_address' => '\SellingPartnerApi\Model\FbaOutbound\Address',
        'fulfillment_action' => '\SellingPartnerApi\Model\FbaOutbound\FulfillmentAction',
        'fulfillment_policy' => '\SellingPartnerApi\Model\FbaOutbound\FulfillmentPolicy',
        'cod_settings' => '\SellingPartnerApi\Model\FbaOutbound\CODSettings',
        'received_date' => 'string',
        'fulfillment_order_status' => '\SellingPartnerApi\Model\FbaOutbound\FulfillmentOrderStatus',
        'status_updated_date' => 'string',
        'notification_emails' => 'string[]',
        'feature_constraints' => '\SellingPartnerApi\Model\FbaOutbound\FeatureSettings[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'seller_fulfillment_order_id' => null,
        'marketplace_id' => null,
        'displayable_order_id' => null,
        'displayable_order_date' => null,
        'displayable_order_comment' => null,
        'shipping_speed_category' => null,
        'delivery_window' => null,
        'destination_address' => null,
        'fulfillment_action' => null,
        'fulfillment_policy' => null,
        'cod_settings' => null,
        'received_date' => null,
        'fulfillment_order_status' => null,
        'status_updated_date' => null,
        'notification_emails' => null,
        'feature_constraints' => null
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
        'seller_fulfillment_order_id' => 'sellerFulfillmentOrderId',
        'marketplace_id' => 'marketplaceId',
        'displayable_order_id' => 'displayableOrderId',
        'displayable_order_date' => 'displayableOrderDate',
        'displayable_order_comment' => 'displayableOrderComment',
        'shipping_speed_category' => 'shippingSpeedCategory',
        'delivery_window' => 'deliveryWindow',
        'destination_address' => 'destinationAddress',
        'fulfillment_action' => 'fulfillmentAction',
        'fulfillment_policy' => 'fulfillmentPolicy',
        'cod_settings' => 'codSettings',
        'received_date' => 'receivedDate',
        'fulfillment_order_status' => 'fulfillmentOrderStatus',
        'status_updated_date' => 'statusUpdatedDate',
        'notification_emails' => 'notificationEmails',
        'feature_constraints' => 'featureConstraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_fulfillment_order_id' => 'setSellerFulfillmentOrderId',
        'marketplace_id' => 'setMarketplaceId',
        'displayable_order_id' => 'setDisplayableOrderId',
        'displayable_order_date' => 'setDisplayableOrderDate',
        'displayable_order_comment' => 'setDisplayableOrderComment',
        'shipping_speed_category' => 'setShippingSpeedCategory',
        'delivery_window' => 'setDeliveryWindow',
        'destination_address' => 'setDestinationAddress',
        'fulfillment_action' => 'setFulfillmentAction',
        'fulfillment_policy' => 'setFulfillmentPolicy',
        'cod_settings' => 'setCodSettings',
        'received_date' => 'setReceivedDate',
        'fulfillment_order_status' => 'setFulfillmentOrderStatus',
        'status_updated_date' => 'setStatusUpdatedDate',
        'notification_emails' => 'setNotificationEmails',
        'feature_constraints' => 'setFeatureConstraints',
        'headers' => 'setHeaders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_fulfillment_order_id' => 'getSellerFulfillmentOrderId',
        'marketplace_id' => 'getMarketplaceId',
        'displayable_order_id' => 'getDisplayableOrderId',
        'displayable_order_date' => 'getDisplayableOrderDate',
        'displayable_order_comment' => 'getDisplayableOrderComment',
        'shipping_speed_category' => 'getShippingSpeedCategory',
        'delivery_window' => 'getDeliveryWindow',
        'destination_address' => 'getDestinationAddress',
        'fulfillment_action' => 'getFulfillmentAction',
        'fulfillment_policy' => 'getFulfillmentPolicy',
        'cod_settings' => 'getCodSettings',
        'received_date' => 'getReceivedDate',
        'fulfillment_order_status' => 'getFulfillmentOrderStatus',
        'status_updated_date' => 'getStatusUpdatedDate',
        'notification_emails' => 'getNotificationEmails',
        'feature_constraints' => 'getFeatureConstraints',
        'headers' => 'getHeaders'
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
        $this->container['seller_fulfillment_order_id'] = $data['seller_fulfillment_order_id'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['displayable_order_id'] = $data['displayable_order_id'] ?? null;
        $this->container['displayable_order_date'] = $data['displayable_order_date'] ?? null;
        $this->container['displayable_order_comment'] = $data['displayable_order_comment'] ?? null;
        $this->container['shipping_speed_category'] = $data['shipping_speed_category'] ?? null;
        $this->container['delivery_window'] = $data['delivery_window'] ?? null;
        $this->container['destination_address'] = $data['destination_address'] ?? null;
        $this->container['fulfillment_action'] = $data['fulfillment_action'] ?? null;
        $this->container['fulfillment_policy'] = $data['fulfillment_policy'] ?? null;
        $this->container['cod_settings'] = $data['cod_settings'] ?? null;
        $this->container['received_date'] = $data['received_date'] ?? null;
        $this->container['fulfillment_order_status'] = $data['fulfillment_order_status'] ?? null;
        $this->container['status_updated_date'] = $data['status_updated_date'] ?? null;
        $this->container['notification_emails'] = $data['notification_emails'] ?? null;
        $this->container['feature_constraints'] = $data['feature_constraints'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['seller_fulfillment_order_id'] === null) {
            $invalidProperties[] = "'seller_fulfillment_order_id' can't be null";
        }
        if ($this->container['marketplace_id'] === null) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if ($this->container['displayable_order_id'] === null) {
            $invalidProperties[] = "'displayable_order_id' can't be null";
        }
        if ($this->container['displayable_order_date'] === null) {
            $invalidProperties[] = "'displayable_order_date' can't be null";
        }
        if ($this->container['displayable_order_comment'] === null) {
            $invalidProperties[] = "'displayable_order_comment' can't be null";
        }
        if ($this->container['shipping_speed_category'] === null) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if ($this->container['destination_address'] === null) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if ($this->container['received_date'] === null) {
            $invalidProperties[] = "'received_date' can't be null";
        }
        if ($this->container['fulfillment_order_status'] === null) {
            $invalidProperties[] = "'fulfillment_order_status' can't be null";
        }
        if ($this->container['status_updated_date'] === null) {
            $invalidProperties[] = "'status_updated_date' can't be null";
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
     * Gets headers, if this is a top-level response model
     *
     * @return array[string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers (only relevant to response models)
     *
     * @param array[string => string]|null $headers Associative array of response headers.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }


    /**
     * Gets seller_fulfillment_order_id
     *
     * @return string
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->container['seller_fulfillment_order_id'];
    }

    /**
     * Sets seller_fulfillment_order_id
     *
     * @param string $seller_fulfillment_order_id The fulfillment order identifier submitted with the createFulfillmentOrder operation.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderId($seller_fulfillment_order_id)
    {
        $this->container['seller_fulfillment_order_id'] = $seller_fulfillment_order_id;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string $marketplace_id The identifier for the marketplace the fulfillment order is placed against.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets displayable_order_id
     *
     * @return string
     */
    public function getDisplayableOrderId()
    {
        return $this->container['displayable_order_id'];
    }

    /**
     * Sets displayable_order_id
     *
     * @param string $displayable_order_id A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip.
     *
     * @return self
     */
    public function setDisplayableOrderId($displayable_order_id)
    {
        $this->container['displayable_order_id'] = $displayable_order_id;

        return $this;
    }

    /**
     * Gets displayable_order_date
     *
     * @return string
     */
    public function getDisplayableOrderDate()
    {
        return $this->container['displayable_order_date'];
    }

    /**
     * Sets displayable_order_date
     *
     * @param string $displayable_order_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setDisplayableOrderDate($displayable_order_date)
    {
        $this->container['displayable_order_date'] = $displayable_order_date;

        return $this;
    }

    /**
     * Gets displayable_order_comment
     *
     * @return string
     */
    public function getDisplayableOrderComment()
    {
        return $this->container['displayable_order_comment'];
    }

    /**
     * Sets displayable_order_comment
     *
     * @param string $displayable_order_comment A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip.
     *
     * @return self
     */
    public function setDisplayableOrderComment($displayable_order_comment)
    {
        $this->container['displayable_order_comment'] = $displayable_order_comment;

        return $this;
    }

    /**
     * Gets shipping_speed_category
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     *
     * @return self
     */
    public function setShippingSpeedCategory($shipping_speed_category)
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets delivery_window
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\DeliveryWindow|null
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\DeliveryWindow|null $delivery_window delivery_window
     *
     * @return self
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets destination_address
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\Address
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\Address $destination_address destination_address
     *
     * @return self
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_action
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\FulfillmentAction|null
     */
    public function getFulfillmentAction()
    {
        return $this->container['fulfillment_action'];
    }

    /**
     * Sets fulfillment_action
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\FulfillmentAction|null $fulfillment_action fulfillment_action
     *
     * @return self
     */
    public function setFulfillmentAction($fulfillment_action)
    {
        $this->container['fulfillment_action'] = $fulfillment_action;

        return $this;
    }

    /**
     * Gets fulfillment_policy
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\FulfillmentPolicy|null
     */
    public function getFulfillmentPolicy()
    {
        return $this->container['fulfillment_policy'];
    }

    /**
     * Sets fulfillment_policy
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\FulfillmentPolicy|null $fulfillment_policy fulfillment_policy
     *
     * @return self
     */
    public function setFulfillmentPolicy($fulfillment_policy)
    {
        $this->container['fulfillment_policy'] = $fulfillment_policy;

        return $this;
    }

    /**
     * Gets cod_settings
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\CODSettings|null
     */
    public function getCodSettings()
    {
        return $this->container['cod_settings'];
    }

    /**
     * Sets cod_settings
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\CODSettings|null $cod_settings cod_settings
     *
     * @return self
     */
    public function setCodSettings($cod_settings)
    {
        $this->container['cod_settings'] = $cod_settings;

        return $this;
    }

    /**
     * Gets received_date
     *
     * @return string
     */
    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date
     *
     * @param string $received_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setReceivedDate($received_date)
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets fulfillment_order_status
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\FulfillmentOrderStatus
     */
    public function getFulfillmentOrderStatus()
    {
        return $this->container['fulfillment_order_status'];
    }

    /**
     * Sets fulfillment_order_status
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\FulfillmentOrderStatus $fulfillment_order_status fulfillment_order_status
     *
     * @return self
     */
    public function setFulfillmentOrderStatus($fulfillment_order_status)
    {
        $this->container['fulfillment_order_status'] = $fulfillment_order_status;

        return $this;
    }

    /**
     * Gets status_updated_date
     *
     * @return string
     */
    public function getStatusUpdatedDate()
    {
        return $this->container['status_updated_date'];
    }

    /**
     * Sets status_updated_date
     *
     * @param string $status_updated_date A datetime string in ISO 8601 format.
     *
     * @return self
     */
    public function setStatusUpdatedDate($status_updated_date)
    {
        $this->container['status_updated_date'] = $status_updated_date;

        return $this;
    }

    /**
     * Gets notification_emails
     *
     * @return string[]|null
     */
    public function getNotificationEmails()
    {
        return $this->container['notification_emails'];
    }

    /**
     * Sets notification_emails
     *
     * @param string[]|null $notification_emails A list of email addresses that the seller provides that are used by Amazon to send ship-complete notifications to recipients on behalf of the seller.
     *
     * @return self
     */
    public function setNotificationEmails($notification_emails)
    {
        $this->container['notification_emails'] = $notification_emails;

        return $this;
    }

    /**
     * Gets feature_constraints
     *
     * @return \SellingPartnerApi\Model\FbaOutbound\FeatureSettings[]|null
     */
    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints
     *
     * @param \SellingPartnerApi\Model\FbaOutbound\FeatureSettings[]|null $feature_constraints A list of features and their fulfillment policies to apply to the order.
     *
     * @return self
     */
    public function setFeatureConstraints($feature_constraints)
    {
        $this->container['feature_constraints'] = $feature_constraints;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


