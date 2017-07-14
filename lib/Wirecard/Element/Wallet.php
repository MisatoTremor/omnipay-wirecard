<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class Wallet
{
    /**
     * @var string
     * @Serializer\SerializedName("account-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $accountId;
    /**
     * @var string
     * @Serializer\SerializedName("merchant-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $merchantId;
    /**
     * @var string
     * @Serializer\SerializedName("request-token")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $requestToken;
    /**
     * @var string
     * @Serializer\SerializedName("pair-token")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $pairToken;
    /**
     * @var string
     * @Serializer\SerializedName("card-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cardId;
    /**
     * @var string
     * @Serializer\SerializedName("address-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $addressId;
    /**
     * @var string
     * @Serializer\SerializedName("provider-ref")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $providerRef;
    /**
     * @var string
     * @Serializer\SerializedName("provider-transaction-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $providerTransactionId;
    /**
     * @var string
     * @Serializer\SerializedName("wallet-data")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $walletData;
}
