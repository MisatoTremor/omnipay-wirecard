<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Voucher
{
    /**
     * @var string
     * @Serializer\SerializedName("voucher-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $voucherCode;
    /**
     * @var string
     * @Serializer\SerializedName("voucher-brand-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $voucherBrandId;
    /**
     * @var string
     * @Serializer\SerializedName("voucher-token-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $voucherTokenId;
    /**
     * @var string
     * @Serializer\SerializedName("voucher-description")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $voucherDescription;
}
