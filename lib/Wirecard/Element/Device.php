<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Device
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $fingerprint;
    /**
     * @var int
     * @Serializer\SerializedName("policy-score")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $policyScore;
}
