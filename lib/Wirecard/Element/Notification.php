<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Notification
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $url;
    /**
     * @var string
     * @Serializer\SerializedName("transaction-state")
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $transactionState;
}
