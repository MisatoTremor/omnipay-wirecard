<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class Consumer
{
    /**
     * @var string
     * @Serializer\SerializedName("first-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $firstName;
    /**
     * @var string
     * @Serializer\SerializedName("last-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lastName;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $email;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $gender;
    /**
     * @var DateTime
     * @Serializer\SerializedName("date-of-birth")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $dateOfBirth;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $phone;
    /**
     * @var Address
     * @Serializer\Type("Wirecard\Element\Address")
     */
    public $address;
    /**
     * @var string
     * @Serializer\SerializedName("merchant-crm-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $merchantCrmId;
    /**
     * @var string
     * @Serializer\SerializedName("social-security-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $socialSecurityNumber;
}
