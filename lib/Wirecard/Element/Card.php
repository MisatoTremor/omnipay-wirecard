<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Card
{
    /**
     * @var string
     * @Serializer\SerializedName("account-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $accountNumber;
    /**
     * @var string
     * @Serializer\SerializedName("expiration-month")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $expirationMonth;
    /**
     * @var string
     * @Serializer\SerializedName("expiration-year")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $expirationYear;
    /**
     * @var string
     * @Serializer\SerializedName("card-security-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cardSecurityCode;
    /**
     * @var string
     * @Serializer\SerializedName("card-type")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cardType;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $track1;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $track2;
}
