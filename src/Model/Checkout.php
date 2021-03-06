<?php
/**
 * Checkout
 *
 * @package  BigCommerce\Api\v3
 */

/**
 * Checkouts
 *
 * Create checkouts from existing carts using BigCommerce checkout logic.
 *
 * OpenAPI spec version: 3.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BigCommerce\Api\v3\Model;

use \ArrayAccess;

class Checkout implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Checkout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'cart' => '\BigCommerce\Api\v3\Model\CartYamlDefinitionsCart',
        'billing_address' => 'object',
        'consignments' => '\BigCommerce\Api\v3\Model\Consignment[]',
        'taxes' => '\BigCommerce\Api\v3\Model\Tax[]',
        'coupons' => '\BigCommerce\Api\v3\Model\AppliedCoupon[]',
        'order_id' => 'string',
        'shipping_cost_total_inc_tax' => 'double',
        'shipping_cost_total_ex_tax' => 'double',
        'handling_cost_total_inc_tax' => 'double',
        'handling_cost_total_ex_tax' => 'double',
        'tax_total' => 'double',
        'subtotal_inc_tax' => 'double',
        'subtotal_ex_tax' => 'double',
        'grand_total' => 'double',
        'created_time' => 'string',
        'updated_time' => 'string',
        'customer_message' => 'string'
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
        'id' => 'id',
        'cart' => 'cart',
        'billing_address' => 'billing_address',
        'consignments' => 'consignments',
        'taxes' => 'taxes',
        'coupons' => 'coupons',
        'order_id' => 'order_id',
        'shipping_cost_total_inc_tax' => 'shipping_cost_total_inc_tax',
        'shipping_cost_total_ex_tax' => 'shipping_cost_total_ex_tax',
        'handling_cost_total_inc_tax' => 'handling_cost_total_inc_tax',
        'handling_cost_total_ex_tax' => 'handling_cost_total_ex_tax',
        'tax_total' => 'tax_total',
        'subtotal_inc_tax' => 'subtotal_inc_tax',
        'subtotal_ex_tax' => 'subtotal_ex_tax',
        'grand_total' => 'grand_total',
        'created_time' => 'created_time',
        'updated_time' => 'updated_time',
        'customer_message' => 'customer_message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'cart' => 'setCart',
        'billing_address' => 'setBillingAddress',
        'consignments' => 'setConsignments',
        'taxes' => 'setTaxes',
        'coupons' => 'setCoupons',
        'order_id' => 'setOrderId',
        'shipping_cost_total_inc_tax' => 'setShippingCostTotalIncTax',
        'shipping_cost_total_ex_tax' => 'setShippingCostTotalExTax',
        'handling_cost_total_inc_tax' => 'setHandlingCostTotalIncTax',
        'handling_cost_total_ex_tax' => 'setHandlingCostTotalExTax',
        'tax_total' => 'setTaxTotal',
        'subtotal_inc_tax' => 'setSubtotalIncTax',
        'subtotal_ex_tax' => 'setSubtotalExTax',
        'grand_total' => 'setGrandTotal',
        'created_time' => 'setCreatedTime',
        'updated_time' => 'setUpdatedTime',
        'customer_message' => 'setCustomerMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'cart' => 'getCart',
        'billing_address' => 'getBillingAddress',
        'consignments' => 'getConsignments',
        'taxes' => 'getTaxes',
        'coupons' => 'getCoupons',
        'order_id' => 'getOrderId',
        'shipping_cost_total_inc_tax' => 'getShippingCostTotalIncTax',
        'shipping_cost_total_ex_tax' => 'getShippingCostTotalExTax',
        'handling_cost_total_inc_tax' => 'getHandlingCostTotalIncTax',
        'handling_cost_total_ex_tax' => 'getHandlingCostTotalExTax',
        'tax_total' => 'getTaxTotal',
        'subtotal_inc_tax' => 'getSubtotalIncTax',
        'subtotal_ex_tax' => 'getSubtotalExTax',
        'grand_total' => 'getGrandTotal',
        'created_time' => 'getCreatedTime',
        'updated_time' => 'getUpdatedTime',
        'customer_message' => 'getCustomerMessage'
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

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = [])
    {
        $this->container['id'] = array_key_exists('id', $data) ? $data['id'] : null;
        $this->container['cart'] = array_key_exists('cart', $data) ? $data['cart'] : null;
        $this->container['billing_address'] = array_key_exists('billing_address', $data) ? $data['billing_address'] : null;
        $this->container['consignments'] = array_key_exists('consignments', $data) ? $data['consignments'] : null;
        $this->container['taxes'] = array_key_exists('taxes', $data) ? $data['taxes'] : null;
        $this->container['coupons'] = array_key_exists('coupons', $data) ? $data['coupons'] : null;
        $this->container['order_id'] = array_key_exists('order_id', $data) ? $data['order_id'] : null;
        $this->container['shipping_cost_total_inc_tax'] = array_key_exists('shipping_cost_total_inc_tax', $data) ? $data['shipping_cost_total_inc_tax'] : null;
        $this->container['shipping_cost_total_ex_tax'] = array_key_exists('shipping_cost_total_ex_tax', $data) ? $data['shipping_cost_total_ex_tax'] : null;
        $this->container['handling_cost_total_inc_tax'] = array_key_exists('handling_cost_total_inc_tax', $data) ? $data['handling_cost_total_inc_tax'] : null;
        $this->container['handling_cost_total_ex_tax'] = array_key_exists('handling_cost_total_ex_tax', $data) ? $data['handling_cost_total_ex_tax'] : null;
        $this->container['tax_total'] = array_key_exists('tax_total', $data) ? $data['tax_total'] : null;
        $this->container['subtotal_inc_tax'] = array_key_exists('subtotal_inc_tax', $data) ? $data['subtotal_inc_tax'] : null;
        $this->container['subtotal_ex_tax'] = array_key_exists('subtotal_ex_tax', $data) ? $data['subtotal_ex_tax'] : null;
        $this->container['grand_total'] = array_key_exists('grand_total', $data) ? $data['grand_total'] : null;
        $this->container['created_time'] = array_key_exists('created_time', $data) ? $data['created_time'] : null;
        $this->container['updated_time'] = array_key_exists('updated_time', $data) ? $data['updated_time'] : null;
        $this->container['customer_message'] = array_key_exists('customer_message', $data) ? $data['customer_message'] : null;
    }

    /**
     * returns container
     * @return array
     */
    public function get()
    {
        return $this->container;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id 
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets cart
     * @return \BigCommerce\Api\v3\Model\CartYamlDefinitionsCart
     */
    public function getCart()
    {
        return $this->container['cart'];
    }

    /**
     * Sets cart
     * @param \BigCommerce\Api\v3\Model\CartYamlDefinitionsCart $cart
     * @return $this
     */
    public function setCart($cart)
    {
        $this->container['cart'] = $cart;

        return $this;
    }

    /**
     * Gets billing_address
     * @return object
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     * @param object $billing_address
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets consignments
     * @return \BigCommerce\Api\v3\Model\Consignment[]
     */
    public function getConsignments()
    {
        return $this->container['consignments'];
    }

    /**
     * Sets consignments
     * @param \BigCommerce\Api\v3\Model\Consignment[] $consignments 
     * @return $this
     */
    public function setConsignments($consignments)
    {
        $this->container['consignments'] = $consignments;

        return $this;
    }

    /**
     * Gets taxes
     * @return \BigCommerce\Api\v3\Model\Tax[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     * @param \BigCommerce\Api\v3\Model\Tax[] $taxes 
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets coupons
     * @return \BigCommerce\Api\v3\Model\AppliedCoupon[]
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     * @param \BigCommerce\Api\v3\Model\AppliedCoupon[] $coupons Coupons applied at checkout level.
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param string $order_id 
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets shipping_cost_total_inc_tax
     * @return double
     */
    public function getShippingCostTotalIncTax()
    {
        return $this->container['shipping_cost_total_inc_tax'];
    }

    /**
     * Sets shipping_cost_total_inc_tax
     * @param double $shipping_cost_total_inc_tax Shipping cost before any discounts are applied including tax.
     * @return $this
     */
    public function setShippingCostTotalIncTax($shipping_cost_total_inc_tax)
    {
        $this->container['shipping_cost_total_inc_tax'] = $shipping_cost_total_inc_tax;

        return $this;
    }

    /**
     * Gets shipping_cost_total_ex_tax
     * @return double
     */
    public function getShippingCostTotalExTax()
    {
        return $this->container['shipping_cost_total_ex_tax'];
    }

    /**
     * Sets shipping_cost_total_ex_tax
     * @param double $shipping_cost_total_ex_tax Shipping cost before any discounts are applied excluding tax.
     * @return $this
     */
    public function setShippingCostTotalExTax($shipping_cost_total_ex_tax)
    {
        $this->container['shipping_cost_total_ex_tax'] = $shipping_cost_total_ex_tax;

        return $this;
    }

    /**
     * Gets handling_cost_total_inc_tax
     * @return double
     */
    public function getHandlingCostTotalIncTax()
    {
        return $this->container['handling_cost_total_inc_tax'];
    }

    /**
     * Sets handling_cost_total_inc_tax
     * @param double $handling_cost_total_inc_tax Handling cost for all consignments including tax.
     * @return $this
     */
    public function setHandlingCostTotalIncTax($handling_cost_total_inc_tax)
    {
        $this->container['handling_cost_total_inc_tax'] = $handling_cost_total_inc_tax;

        return $this;
    }

    /**
     * Gets handling_cost_total_ex_tax
     * @return double
     */
    public function getHandlingCostTotalExTax()
    {
        return $this->container['handling_cost_total_ex_tax'];
    }

    /**
     * Sets handling_cost_total_ex_tax
     * @param double $handling_cost_total_ex_tax Handling cost for all consignments excluding tax.
     * @return $this
     */
    public function setHandlingCostTotalExTax($handling_cost_total_ex_tax)
    {
        $this->container['handling_cost_total_ex_tax'] = $handling_cost_total_ex_tax;

        return $this;
    }

    /**
     * Gets tax_total
     * @return double
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     * @param double $tax_total 
     * @return $this
     */
    public function setTaxTotal($tax_total)
    {
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets subtotal_inc_tax
     * @return double
     */
    public function getSubtotalIncTax()
    {
        return $this->container['subtotal_inc_tax'];
    }

    /**
     * Sets subtotal_inc_tax
     * @param double $subtotal_inc_tax Subtotal of the checkout before applying item level discounts including tax.
     * @return $this
     */
    public function setSubtotalIncTax($subtotal_inc_tax)
    {
        $this->container['subtotal_inc_tax'] = $subtotal_inc_tax;

        return $this;
    }

    /**
     * Gets subtotal_ex_tax
     * @return double
     */
    public function getSubtotalExTax()
    {
        return $this->container['subtotal_ex_tax'];
    }

    /**
     * Sets subtotal_ex_tax
     * @param double $subtotal_ex_tax Subtotal of the checkout before applying item level discounts excluding tax.
     * @return $this
     */
    public function setSubtotalExTax($subtotal_ex_tax)
    {
        $this->container['subtotal_ex_tax'] = $subtotal_ex_tax;

        return $this;
    }

    /**
     * Gets grand_total
     * @return double
     */
    public function getGrandTotal()
    {
        return $this->container['grand_total'];
    }

    /**
     * Sets grand_total
     * @param double $grand_total The total payable amount, before applying any store credit or gift certificate.
     * @return $this
     */
    public function setGrandTotal($grand_total)
    {
        $this->container['grand_total'] = $grand_total;

        return $this;
    }

    /**
     * Gets created_time
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     * @param string $created_time Time when the cart was created.
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets updated_time
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     * @param string $updated_time Time when the cart was last updated.
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets customer_message
     * @return string
     */
    public function getCustomerMessage()
    {
        return $this->container['customer_message'];
    }

    /**
     * Sets customer_message
     * @param string $customer_message Shopper's message provided as details for the order to be created from this checkout
     * @return $this
     */
    public function setCustomerMessage($customer_message)
    {
        $this->container['customer_message'] = $customer_message;

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
            return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BigCommerce\Api\v3\ObjectSerializer::sanitizeForSerialization($this));
    }
}


