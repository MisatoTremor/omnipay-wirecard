<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class IsoRecon
{
    /**
     * @var string
     * @Serializer\SerializedName("captured-sale-count")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $capturedSaleCount;
    /**
     * @var string
     * @Serializer\SerializedName("captured-sale-amount")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $capturedSaleAmount;
    /**
     * @var string
     * @Serializer\SerializedName("captured-refund-count")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $capturedRefundCount;
    /**
     * @var string
     * @Serializer\SerializedName("captured-refund-amount")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $capturedRefundAmount;
    /**
     * @var string
     * @Serializer\SerializedName("authorized-sale-count")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $authorizedSaleCount;
    /**
     * @var string
     * @Serializer\SerializedName("authorized-sale-amount")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $authorizedSaleAmount;
    /**
     * @var string
     * @Serializer\SerializedName("authorized-refund-count")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $authorizedRefundCount;
    /**
     * @var string
     * @Serializer\SerializedName("authorized-refund-amount")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $authorizedRefundAmount;
    /**
     * @var string
     * @Serializer\SerializedName("response-text")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $responseText;
    /**
     * @var string
     * @Serializer\SerializedName("number-of-reversal")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $numberOfReversal;
    /**
     * @var string
     * @Serializer\SerializedName("number-of-adjustment")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $numberOfAdjustment;
    /**
     * @var string
     * @Serializer\SerializedName("number-of-roc")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $numberOfRoc;
}
