<?php

namespace Wirecard\Element;

use JMS\Serializer\Annotation as Serializer;

class BankAccount
{
    /**
     * @var string
     * @Serializer\SerializedName("bank-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $bankName;
    /**
     * @var string
     * @Serializer\SerializedName("branch-city")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $branchCity;
    /**
     * @var string
     * @Serializer\SerializedName("branch-state")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $branchState;
    /**
     * @var string
     * @Serializer\SerializedName("branch-address")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $branchAddress;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $iban;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $bic;
    /**
     * @var string
     * @Serializer\SerializedName("account-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $accountNumber;
    /**
     * @var string
     * @Serializer\SerializedName("bank-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $bankCode;
}
