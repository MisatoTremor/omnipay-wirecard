<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class Mandate
{
    /**
     * @var string
     * @Serializer\SerializedName("mandate-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $mandateId;
    /**
     * @var DateTime
     * @Serializer\SerializedName("signed-date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $signedDate;
    /**
     * @var string
     * @Serializer\SerializedName("signed-city")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $signedCity;
    /**
     * @var string
     * @Serializer\SerializedName("signature-image")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $signatureImage;
}
