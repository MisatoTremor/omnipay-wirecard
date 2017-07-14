<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

class Iso
{
    /**
     * @var string
     * @Serializer\SerializedName("merchant-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $merchantId;
    /**
     * @var string
     * @Serializer\SerializedName("terminal-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $terminalId;
    /**
     * @var string
     * @Serializer\SerializedName("bank-terminal-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $bankTerminalId;
    /**
     * @var string
     * @Serializer\SerializedName("response-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $responseCode;
    /**
     * @var string
     * @Serializer\SerializedName("approval-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $approvalCode;
    /**
     * @var string
     * @Serializer\SerializedName("retrieval-reference-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $retrievalReferenceNumber;
    /**
     * @var string
     * @Serializer\SerializedName("invoice-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $invoiceNumber;
    /**
     * @var string
     * @Serializer\SerializedName("transaction-advise-ref")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $transactionAdviseRef;
    /**
     * @var string
     * @Serializer\SerializedName("transaction-reversal-ref")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $transactionReversalRef;
    /**
     * @var string
     * @Serializer\SerializedName("transaction-amount")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $transactionAmount;
    /**
     * @var string
     * @Serializer\SerializedName("message-type-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $messageTypeId;
    /**
     * @var string
     * @Serializer\SerializedName("processing-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $processingCode;
    /**
     * @var string
     * @Serializer\SerializedName("system-trace-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $systemTraceNumber;
    /**
     * @var string
     * @Serializer\SerializedName("pos-transaction-time")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $posTransactionTime;
    /**
     * @var string
     * @Serializer\SerializedName("pos-transaction-date")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $posTransactionDate;
    /**
     * @var string
     * @Serializer\SerializedName("pos-entry-mode")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $posEntryMode;
    /**
     * @var int
     * @Serializer\SerializedName("pos-pin-input-length-capability")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $posPinInputLengthCapability;
    /**
     * @var string
     * @Serializer\SerializedName("card-seq-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cardSeqNumber;
    /**
     * @var string
     * @Serializer\SerializedName("pos-nii")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $posNii;
    /**
     * @var string
     * @Serializer\SerializedName("pos-condition-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $posConditionCode;
    /**
     * @var string
     * @Serializer\SerializedName("additional-amount")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $additionalAmount;
    /**
     * @var string
     * @Serializer\SerializedName("request-emv-icc-data")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $requestEmvIccData;
    /**
     * @var string
     * @Serializer\SerializedName("response-emv-icc-data")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $responseEmvIccData;
    /**
     * @var string
     * @Serializer\SerializedName("batch-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $batchNumber;
    /**
     * @var string
     * @Serializer\SerializedName("original-amount")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $originalAmount;
    /**
     * @var string
     * @Serializer\SerializedName("original-message-data")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $originalMessageData;
    /**
     * @var string
     * @Serializer\SerializedName("settle-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $settleId;
    /**
     * @var DateTime
     * @Serializer\SerializedName("settle-on")
     * @Serializer\Type("DateTime")
     * @Serializer\XmlElement(cdata=false)
     */
    public $settleOn;
    /**
     * @var string
     * @Serializer\SerializedName("pin-data")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $pinData;
    /**
     * @var string
     * @Serializer\SerializedName("product-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $productCode;
    /**
     * @var string
     * @Serializer\SerializedName("msg-auth-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $msgAuthCode;
    /**
     * @var IsoField[]
     * @Serializer\SerializedName("iso-fields")
     * @Serializer\Type("array<Wirecard\Element\IsoField>")
     * @Serializer\XmlList(entry="iso-field")
     */
    public $isoFields;
}
