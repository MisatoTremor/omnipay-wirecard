<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Browser
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $accept;
    /**
     * @var string
     * @Serializer\SerializedName("user-agent")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $userAgent;
    /**
     * @var string
     * @Serializer\SerializedName("ip-address")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $ipAddress;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $hostname;
    /**
     * @var string
     * @Serializer\SerializedName("browser-version")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $browserVersion;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $os;
    /**
     * @var string
     * @Serializer\SerializedName("screen-resolution")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $screenResolution;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $referrer;
}
