<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class CardToken
{
    /**
     * @var string
     * @Serializer\SerializedName("token-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $tokenId;
    /**
     * @var string
     * @Serializer\SerializedName("masked-account-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $maskedAccountNumber;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $cryptogram;
}
