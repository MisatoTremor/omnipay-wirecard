<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class RequestedAmount
{
    /**
     * @var double
     * @Serializer\Type("double")
     * @Serializer\XmlValue(cdata=false)
     */
    public $value;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $currency;

    /**
     * RequestedAmount constructor.
     *
     * @param double $value
     * @param string $currency
     */
    public function __construct($value, $currency)
    {
        $this->value = $value;
        $this->currency = $currency;
    }
}
