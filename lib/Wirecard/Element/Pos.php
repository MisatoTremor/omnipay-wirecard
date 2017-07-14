<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Pos
{
    /**
     * @var string
     * @Serializer\SerializedName("merchant-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $merchantId;
    /**
     * @var string
     * @Serializer\SerializedName("terminal-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $terminalId;
}
