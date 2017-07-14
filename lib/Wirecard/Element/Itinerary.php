<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Itinerary
{
    /**
     * @var Segment[]
     * @Serializer\Type("array<Wirecard\Element\Segment>")
     * @Serializer\XmlList(entry="segment")
     */
    public $segment;
}
