<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Settlement
{
    /**
     * @var float
     * @Serializer\SerializedName("gross-amount")
     * @Serializer\Type("float")
     * @Serializer\XmlElement(cdata=false)
     */
    public $grossAmount;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $currency;
}
