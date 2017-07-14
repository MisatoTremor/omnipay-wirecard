<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Address
{
    /**
     * @var string
     * @Serializer\SerializedName("block-no")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $blockNo;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $level;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $unit;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $street1;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $street2;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $city;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $state;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $country;
    /**
     * @var string
     * @Serializer\SerializedName("postal-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $postalCode;
    /**
     * @var string
     * @Serializer\SerializedName("house-extension")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $houseExtension;
}
