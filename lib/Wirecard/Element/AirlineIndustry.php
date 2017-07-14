<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class AirlineIndustry
{
    /**
     * @var string
     * @Serializer\SerializedName("airline-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $airlineCode;
    /**
     * @var string
     * @Serializer\SerializedName("airline-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $airlineName;
    /**
     * @var string
     * @Serializer\SerializedName("passenger-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $passengerCode;
    /**
     * @var string
     * @Serializer\SerializedName("passenger-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $passengerName;
    /**
     * @var string
     * @Serializer\SerializedName("passenger-phone")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $passengerPhone;
    /**
     * @var string
     * @Serializer\SerializedName("passenger-email")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $passengerEmail;
    /**
     * @var string
     * @Serializer\SerializedName("passenger-ip-address")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $passengerIpAddress;
    /**
     * @var DateTime
     * @Serializer\SerializedName("ticket-issue-date")
     * @Serializer\Type("DateTime")
     * @Serializer\XmlElement(cdata=false)
     */
    public $ticketIssueDate;
    /**
     * @var string
     * @Serializer\SerializedName("ticket-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $ticketNumber;
    /**
     * @var int
     * @Serializer\SerializedName("ticket-restricted-flag")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $ticketRestrictedFlag;
    /**
     * @var string
     * @Serializer\SerializedName("pnr-file-key")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $pnrFileKey;
    /**
     * @var int
     * @Serializer\SerializedName("ticket-check-digit")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $ticketCheckDigit;
    /**
     * @var string
     * @Serializer\SerializedName("agent-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $agentCode;
    /**
     * @var string
     * @Serializer\SerializedName("agent-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $agentName;
    /**
     * @var Money
     * @Serializer\SerializedName("non-taxable-net-amount")
     * @Serializer\Type("Wirecard\Element\Money")
     */
    public $nonTaxableNetAmount;
    /**
     * @var Address
     * @Serializer\SerializedName("ticket-issuer")
     * @Serializer\Type("Wirecard\Element\Address")
     */
    public $ticketIssuer;
    /**
     * @var int
     * @Serializer\SerializedName("number-of-passengers")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $numberOfPassengers;
    /**
     * @var string
     * @Serializer\SerializedName("reservation-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $reservationCode;
    /**
     * @var Itinerary
     * @Serializer\Type("Wirecard\Element\Itinerary")
     * @Serializer\XmlElement(cdata=false)
     */
    public $itinerary;
}
