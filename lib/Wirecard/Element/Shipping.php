<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Shipping
{
    /**
     * @var string
     * @Serializer\SerializedName("first-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $firstName;
    /**
     * @var string
     * @Serializer\SerializedName("last-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lastName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $phone;
    /**
     * @var Address
     * @Serializer\Type("Wirecard\Element\Address")
     * @Serializer\XmlElement(cdata=false)
     */
    public $address;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $email;
    /**
     * @var string
     * @Serializer\SerializedName("shipping-method")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $shippingMethod;
    /**
     * @var string
     * @Serializer\SerializedName("tracking-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $trackingNumber;
    /**
     * @var string
     * @Serializer\SerializedName("tracking-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $trackingUrl;
    /**
     * @var string
     * @Serializer\SerializedName("shipping-company")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $shippingCompany;
    /**
     * @var string
     * @Serializer\SerializedName("return-tracking-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $returnTrackingNumber;
    /**
     * @var string
     * @Serializer\SerializedName("return-tracking-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $returnTrackingUrl;
    /**
     * @var string
     * @Serializer\SerializedName("return-shipping-company")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $returnShippingCompany;
}
