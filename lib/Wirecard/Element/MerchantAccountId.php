<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class MerchantAccountId
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlValue(cdata=false)
     */
    public $value;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $ref;
}
