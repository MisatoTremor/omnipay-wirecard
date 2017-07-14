<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class ThreeD
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $pares;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $eci;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $xid;
    /**
     * @var string
     * @Serializer\SerializedName("cardholder-authentication-value")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cardholderAuthenticationValue;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $pareq;
    /**
     * @var string
     * @Serializer\SerializedName("acs-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $acsUrl;
    /**
     * @var bool
     * @Serializer\SerializedName("attempt-three-d")
     * @Serializer\Type("bool")
     */
    public $attemptThreeD;
    /**
     * @var string
     * @Serializer\SerializedName("liability-shift-indicator")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $liabilityShiftIndicator;
    /**
     * @var string
     * @Serializer\SerializedName("cardholder-authentication-status")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cardholderAuthenticationStatus;

    public function isRedirect()
    {
        return !empty($this->acsUrl);
    }
}
