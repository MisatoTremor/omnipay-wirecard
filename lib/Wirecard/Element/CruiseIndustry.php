<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class CruiseIndustry
{
    /**
     * @var string
     * @Serializer\SerializedName("carrier-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $carrierCode;
    /**
     * @var string
     * @Serializer\SerializedName("agent-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $agentCode;
    /**
     * @var string
     * @Serializer\SerializedName("travel-package-type-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $travelPackageTypeCode;
    /**
     * @var string
     * @Serializer\SerializedName("ticket-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $ticketNumber;
    /**
     * @var string
     * @Serializer\SerializedName("passenger-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $passengerName;
    /**
     * @var string
     * @Serializer\SerializedName("lodging-check-in-date")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lodgingCheckInDate;
    /**
     * @var string
     * @Serializer\SerializedName("lodging-check-out-date")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lodgingCheckOutDate;
    /**
     * @var money
     * @Serializer\SerializedName("lodging-room-rate")
     * @Serializer\Type("money")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lodgingRoomRate;
    /**
     * @var int
     * @Serializer\SerializedName("number-of-nights")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $numberOfNights;
    /**
     * @var string
     * @Serializer\SerializedName("lodging-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lodgingName;
    /**
     * @var string
     * @Serializer\SerializedName("lodging-city-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lodgingCityName;
    /**
     * @var string
     * @Serializer\SerializedName("lodging-region-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lodgingRegionCode;
    /**
     * @var string
     * @Serializer\SerializedName("lodging-country-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $lodgingCountryCode;
    /**
     * @var Itinerary
     * @Serializer\Type("Wirecard\Element\Itinerary")
     * @Serializer\XmlElement(cdata=false)
     */
    public $itinerary;
}
