<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class OrderItem
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $name;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $description;
    /**
     * @var string
     * @Serializer\SerializedName("article-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $articleNumber;
    /**
     * @var Money
     * @Serializer\Type("Wirecard\Element\Money")
     */
    public $amount;
    /**
     * @var Money
     * @Serializer\SerializedName("tax-amount")
     * @Serializer\Type("Wirecard\Element\Money")
     */
    public $taxNmount;
    /**
     * @var float
     * @Serializer\SerializedName("tax-rate")
     * @Serializer\Type("float")
     * @Serializer\XmlElement(cdata=false)
     */
    public $taxRate;
    /**
     * @var int
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $quantity;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $type;
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\XmlElement(cdata=false)
     */
    public $discount;
}
