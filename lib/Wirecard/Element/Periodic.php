<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class Periodic
{
    /**
     * @var string
     * @Serializer\SerializedName("periodic-type")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $periodicType;
    /**
     * @var string
     * @Serializer\SerializedName("sequence-type")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $sequenceType;
    /**
     * @var int
     * @Serializer\SerializedName("number-of-installments")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $numberOfInstallments;
    /**
     * @var DateTime
     * @Serializer\SerializedName("recurring-expire-date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $recurringExpireDate;
}
