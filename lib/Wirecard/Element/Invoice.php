<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class Invoice
{
    /**
     * @var string
     * @Serializer\SerializedName("invoice-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $invoiceNumber;
    /**
     * @var DateTime
     * @Serializer\SerializedName("invoice-date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $invoiceDate;
    /**
     * @var string
     * @Serializer\SerializedName("delivery-method")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $deliveryMethod;
}
