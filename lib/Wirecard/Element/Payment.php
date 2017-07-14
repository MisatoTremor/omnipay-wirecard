<?php

namespace Wirecard\Element;

use DateTime;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\XmlNamespace("http://www.elastic-payments.com/schema/payment")
 * @Serializer\XmlRoot("payment")
 */
class Payment
{
    const TRANSACTION_STATE_IN_PROGRESS = 'in-progress';
    const TRANSACTION_STATE_FAILED = 'failed';
    const TRANSACTION_STATE_SUCCESS = 'success';
    /**
     * @var MerchantAccountId
     * @Serializer\SerializedName("merchant-account-id")
     * @Serializer\Type("Wirecard\Element\MerchantAccountId")
     */
    public $merchantAccountId;
    /**
     * @var string
     * @Serializer\SerializedName("merchant-account-resolver-category")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $merchantAccountResolverCategory;
    /**
     * @var string
     * @Serializer\SerializedName("transaction-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $transactionId;
    /**
     * @var string
     * @Serializer\SerializedName("request-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $requestId;
    /**
     * @var string
     * @Serializer\SerializedName("transaction-type")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $transactionType;
    /**
     * @var string
     * @Serializer\SerializedName("transaction-state")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $transactionState;
    /**
     * @var string
     * @Serializer\SerializedName("completion-time-stamp")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $completionTimeStamp;
    /**
     * @var Status[]
     * @Serializer\Type("array<Wirecard\Element\Status>")
     * @Serializer\XmlList(entry="status")
     */
    public $statuses;
    /**
     * @var string
     * @Serializer\SerializedName("avs-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $avsCode;
    /**
     * @var string
     * @Serializer\SerializedName("csc-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cscCode;
    /**
     * @var RequestedAmount
     * @Serializer\SerializedName("requested-amount")
     * @Serializer\Type("Wirecard\Element\RequestedAmount")
     */
    public $requestedAmount;
    /**
     * @var string
     * @Serializer\SerializedName("parent-transaction-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $parentTransactionId;
    /**
     * @var string
     * @Serializer\SerializedName("group-transaction-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $groupTransactionId;
    /**
     * @var AccountHolder
     * @Serializer\SerializedName("account-holder")
     * @Serializer\Type("Wirecard\Element\AccountHolder")
     */
    public $accountHolder;
    /**
     * @var Money
     * @Serializer\Type("Wirecard\Element\Money")
     */
    public $accountHolderRequestedAmount;
    /**
     * @var int
     * @Serializer\SerializedName("account-holder-conversion-rate")
     * @Serializer\Type("int")
     * @Serializer\XmlElement(cdata=false)
     */
    public $accountHolderConversionRate;
    /**
     * @var Shipping
     * @Serializer\Type("Wirecard\Element\Shipping")
     */
    public $shipping;
    /**
     * @var LoyaltyCard
     * @Serializer\SerializedName("loyalty-card")
     * @Serializer\Type("Wirecard\Element\LoyaltyCard")
     */
    public $loyaltyCard;
    /**
     * @var Card
     * @Serializer\Type("Wirecard\Element\Card")
     */
    public $card;
    /**
     * @var CardToken
     * @Serializer\SerializedName("card-token")
     * @Serializer\Type("Wirecard\Element\CardToken")
     */
    public $cardToken;
    /**
     * @var Cryptogram
     * @Serializer\Type("Wirecard\Element\Cryptogram")
     */
    public $cryptogram;
    /**
     * @var string
     * @Serializer\SerializedName("ip-address")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $ipAddress;
    /**
     * @var string
     * @Serializer\SerializedName("order-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $orderNumber;
    /**
     * @var string
     * @Serializer\SerializedName("order-detail")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $orderDetail;
    /**
     * @var OrderItem[]
     * @Serializer\SerializedName("order-items")
     * @Serializer\Type("array<Wirecard\Element\OrderItem>")
     * @Serializer\XmlList(entry="order-item")
     */
    public $orderItems;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $descriptor;
    /**
     * @var Notification[]
     * @Serializer\Type("array<Wirecard\Element\Notification>")
     * @Serializer\XmlList(entry="notification")
     */
    public $notifications;
    /**
     * @var CustomField[]
     * @Serializer\SerializedName("custom-fields")
     * @Serializer\Type("array<Wirecard\Element\CustomField>")
     * @Serializer\XmlList(entry="custom-field")
     */
    public $customFields;
    /**
     * @var PaymentMethod[]
     * @Serializer\SerializedName("payment-methods")
     * @Serializer\Type("array<Wirecard\Element\PaymentMethod>")
     * @Serializer\XmlList(entry="payment-method")
     */
    public $paymentMethods;
    /**
     * @var string
     * @Serializer\SerializedName("acquirer-reference-number")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $acquirerReferenceNumber;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackId;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-date")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackDate;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-retrieval-date")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackRetrievalDate;
    /**
     * @var Money
     * @Serializer\SerializedName("parent-transaction-amount")
     * @Serializer\Type("Wirecard\Element\Money")
     */
    public $parentTransactionAmount;
    /**
     * @var float
     * @Serializer\SerializedName("chargeback-conversion-rate")
     * @Serializer\Type("float")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackConversionRate;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-reason-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackReasonCode;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-provider-transaction-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackProviderTransactionId;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-provider-account-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackProviderAccountId;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-provider-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackProviderId;
//    /**
//     * @var string
//     * @Serializer\SerializedName("chargeback-status")
//     * @Serializer\Type("string")
//     * @Serializer\XmlElement(cdata=false)
//     */
//    public $chargebackStatus;
    /**
     * @var string
     * @Serializer\SerializedName("chargeback-additional-info")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $chargebackAdditionalInfo;
    /**
     * @var string
     * @Serializer\SerializedName("authorization-code")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $authorizationCode;
    /**
     * @var ThreeD
     * @Serializer\SerializedName("three-d")
     * @Serializer\Type("Wirecard\Element\ThreeD")
     */
    public $threeD;
    /**
     * @var AirlineIndustry
     * @Serializer\SerializedName("airline-industry")
     * @Serializer\Type("Wirecard\Element\AirlineIndustry")
     */
    public $airlineIndustry;
    /**
     * @var CruiseIndustry
     * @Serializer\SerializedName("cruise-industry")
     * @Serializer\Type("Wirecard\Element\CruiseIndustry")
     */
    public $cruiseIndustry;
    /**
     * @var BankAccount
     * @Serializer\SerializedName("bank-account")
     * @Serializer\Type("Wirecard\Element\BankAccount")
     */
    public $bankAccount;
    /**
     * @var BankAccount
     * @Serializer\SerializedName("merchant-bank-account")
     * @Serializer\Type("Wirecard\Element\BankAccount")
     */
    public $merchantBankAccount;
    /**
     * @var Mandate
     * @Serializer\Type("Wirecard\Element\Mandate")
     */
    public $mandate;
    /**
     * @var string
     * @Serializer\SerializedName("creditor-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $creditorId;
    /**
     * @var string
     * @Serializer\SerializedName("consumer-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $consumerId;
    /**
     * @var string
     * @Serializer\SerializedName("api-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $apiId;
    /**
     * @var string
     * @Serializer\SerializedName("api-transaction-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $apiTransactionId;
    /**
     * @var string
     * @Serializer\SerializedName("redirect-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $redirectUrl;
    /**
     * @var string
     * @Serializer\SerializedName("processing-redirect-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $processingRedirectUrl;
    /**
     * @var string
     * @Serializer\SerializedName("cancel-redirect-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cancelRedirectUrl;
    /**
     * @var string
     * @Serializer\SerializedName("fail-redirect-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $failRedirectUrl;
    /**
     * @var string
     * @Serializer\SerializedName("success-redirect-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $successRedirectUrl;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $locale;
    /**
     * @var string
     * @Serializer\SerializedName("psp-name")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $pspName;
    /**
     * @var string
     * @Serializer\SerializedName("custom-css-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $customCssUrl;
    /**
     * @var DateTime
     * @Serializer\SerializedName("due-date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $dueDate;
    /**
     * @var DateTime
     * @Serializer\SerializedName("capture-date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $captureDate;
    /**
     * @var DateTime
     * @Serializer\SerializedName("expiration-date")
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\XmlElement(cdata=false)
     */
    public $expirationDate;
    /**
     * @var File[]
     * @Serializer\Type("array<Wirecard\Element\File>")
     * @Serializer\XmlList(entry="file")
     */
    public $files;
    /**
     * @var Invoice
     * @Serializer\Type("Wirecard\Element\Invoice")
     */
    public $invoice;
    /**
     * @var string
     * @Serializer\SerializedName("entry-mode")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $entryMode;
    /**
     * @var Periodic
     * @Serializer\Type("Wirecard\Element\Periodic")
     */
    public $periodic;
    /**
     * @var Wallet
     * @Serializer\Type("Wirecard\Element\Wallet")
     */
    public $wallet;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $country;
    /**
     * @var Settlement
     * @Serializer\Type("Wirecard\Element\Settlement")
     */
    public $settlement;
    /**
     * @var Batch
     * @Serializer\Type("Wirecard\Element\Batch")
     */
    public $batch;
    /**
     * @var Consumer
     * @Serializer\Type("Wirecard\Element\Consumer")
     */
    public $consumer;
    /**
     * @var string
     * @Serializer\SerializedName("provider-transaction-reference-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $providerTransactionReferenceId;
    /**
     * @var string
     * @Serializer\SerializedName("risk-reference-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $riskReferenceId;
    /**
     * @var string
     * @Serializer\SerializedName("card-bin-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $cardBinId;
    /**
     * @var Device
     * @Serializer\Type("Wirecard\Element\Device")
     */
    public $device;
    /**
     * @var Pos
     * @Serializer\Type("Wirecard\Element\Pos")
     */
    public $pos;
    /**
     * @var Iso
     * @Serializer\Type("Wirecard\Element\Iso")
     */
    public $iso;
    /**
     * @var IsoRecon
     * @Serializer\SerializedName("iso-recon")
     * @Serializer\Type("Wirecard\Element\IsoRecon")
     */
    public $isoRecon;
    /**
     * @var string
     * @Serializer\SerializedName("voucher-card-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $voucherId;
    /**
     * @var Voucher
     * @Serializer\Type("Wirecard\Element\Voucher")
     */
    public $voucher;
    /**
     * @var string
     * @Serializer\SerializedName("instrument-country")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $instrumentCountry;
    /**
     * @var string
     * @Serializer\SerializedName("request-type")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $requestType;
    /**
     * @var string
     * @Serializer\SerializedName("merchant-origin-url")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $merchantOriginUrl;
    /**
     * @var string
     * @Serializer\SerializedName("customer-id")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $customerId;
    /**
     * @var Signature
     * @Serializer\Type("Wirecard\Element\Signature")
     */
    public $signature;
    /**
     * @var SubMerchantInfo
     * @Serializer\SerializedName("sub-merchant-info")
     * @Serializer\Type("Wirecard\Element\SubMerchantInfo")
     */
    public $subMerchantInfo;
    /**
     * @var string
     * @Serializer\SerializedName("one-time-password")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $oneTimePassword;
    /**
     * @var Browser
     * @Serializer\Type("Wirecard\Element\Browser")
     */
    public $browser;
    /**
     * @var string
     * @Serializer\SerializedName("additional-merchant-data")
     * @Serializer\Type("string")
     * @Serializer\XmlElement(cdata=false)
     */
    public $additionalMerchantData;
    /**
     * @var bool
     * @Serializer\Type("bool")
     */
    public $b2b;
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute
     */
    public $self;

    /**
     * @return bool
     */
    public function isSuccessful()
    {
        return self::TRANSACTION_STATE_SUCCESS === $this->transactionState;
    }

    public function isRedirect()
    {
        if (is_array($this->paymentMethods)) {
            foreach ($this->paymentMethods as $paymentMethod) {
                if (!$paymentMethod->isRedirect()) {
                    return false;
                }
            }

            return true;

        }

        return false;
    }

    public function getMessage()
    {
        $status = $this->getStatus(0);

        return $status ? $status->description : '';
    }

    public function getCode()
    {
        $status = $this->getStatus(0);

        return $status ? $status->code : '';
    }

    protected function getStatus($index)
    {
        return !empty($this->statuses) && isset($this->statuses[$index]) ? $this->statuses[$index] : null;
    }
}
