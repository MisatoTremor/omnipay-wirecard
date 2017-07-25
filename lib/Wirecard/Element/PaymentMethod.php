<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class PaymentMethod
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $name;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $url;

    public function isRedirect()
    {
        return !empty($this->url);
    }
}
