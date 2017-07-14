<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class Segment
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
     * @Serializer\SerializedName("departure-airport-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $departureAirportCode;
    /**
     * @var string
     * @Serializer\SerializedName("departure-city-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $departureCityCode;
    /**
     * @var string
     * @Serializer\SerializedName("arrival-airport-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $arrivalAirportCode;
    /**
     * @var string
     * @Serializer\SerializedName("arrival-city-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $arrivalCityCode;
    /**
     * @var DateTime
     * @Serializer\SerializedName("departure-date")
     * @Serializer\Type("DateTime")
     * @Serializer\XmlElement(cdata=false)
     */
    public $departureDate;
    /**
     * @var DateTime
     * @Serializer\SerializedName("arrival-date")
     * @Serializer\Type("DateTime")
     * @Serializer\XmlElement(cdata=false)
     */
    public $arrivalDate;
    /**
     * @var string
     * @Serializer\SerializedName("flight-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $flightNumber;
    /**
     * @var string
     * @Serializer\SerializedName("fare-class")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $fareClass;
    /**
     * @var string
     * @Serializer\SerializedName("fare-basis")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $fareBasis;
    /**
     * @var int
     * @Serializer\SerializedName("stop-over-code")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $stopOverCode;
    /**
     * @var Money
     * @Serializer\SerializedName("tax-amount")
     * @Serializer\Type("Wirecard\Element\Money")
     */
    public $taxAmount;
}
