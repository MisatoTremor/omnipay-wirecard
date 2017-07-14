<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Signature
{
    /**
     * @var string
     * @Serializer\SerializedName("signature-type")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $signatureType;
    /**
     * @var string
     * @Serializer\SerializedName("signature-value")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $signatureValue;
    /**
     * @var string
     * @Serializer\SerializedName("signature-encoding")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $signatureEncoding;
}
