<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class CustomField
{
    /**
     * @var string
     * @Serializer\SerializedName("field-name")
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $fieldName;
    /**
     * @var string
     * @Serializer\SerializedName("field-value")
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $fieldValue;
}
