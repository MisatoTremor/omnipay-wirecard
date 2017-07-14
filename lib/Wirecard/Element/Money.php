<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Money
{
    /**
     * @var float
     * @Serializer\Type("float")
     * @Serializer\XmlValue(cdata=false)
     */
    public $value;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $currency;
}
