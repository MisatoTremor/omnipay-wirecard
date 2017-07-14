<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class File
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $content;
    /**
     * @var string
     * @Serializer\SerializedName("type-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $typeId;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $name;
}
