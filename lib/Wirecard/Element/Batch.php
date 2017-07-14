<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Batch
{
    /**
     * @var string
     * @Serializer\SerializedName("file-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $fileName;
    /**
     * @var string
     * @Serializer\SerializedName("record-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $recordNumber;
}
