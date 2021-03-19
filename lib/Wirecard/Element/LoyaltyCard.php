<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class LoyaltyCard
{
    /**
     * @var string
     * @Serializer\SerializedName("account-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $accountNumber;
    /**
     * @var string
     * @Serializer\SerializedName("personal-identification-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $personalIdentificationNumber;
    /**
     * @var string
     * @Serializer\SerializedName("promotion-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $promotionCode;
    /**
     * @var DateTime
     * @Serializer\SerializedName("activity-date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $activityDate;
}
