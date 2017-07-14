<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Cryptogram
{
    /**
     * @var string
     * @Serializer/SerializedName("cryptogram-type")
     * @Serializer/Type("string")
     * @Serializer/XmlElement(cdata=false)
     */
    public $cryptogramType;
    /**
     * @var string
     * @Serializer/SerializedName("cryptogram-value")
     * @Serializer/Type("string")
     * @Serializer/XmlElement(cdata=false)
     */
    public $cryptogramValue;
}
