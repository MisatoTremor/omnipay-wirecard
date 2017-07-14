<?php

namespace Omnipay\Wirecard\Message\Builder;

use Omnipay\Wirecard\Message\AbstractRequest;
use Wirecard\Element\MerchantAccountId;
use Wirecard\Element\Notification;
use Wirecard\Element\Payment;

abstract class AbstractBuilder implements BuilderInterface
{
    /**
     * @var AbstractRequest
     */
    protected $request;

    /**
     * @param AbstractRequest $request
     */
    public function __construct(AbstractRequest $request)
    {
        $this->request = $request;
    }

    public function build()
    {
        $merchantAccountId = new MerchantAccountId();
        $merchantAccountId->value = $this->request->getMerchantAccountId();

        $notification = new Notification();
        $notification->url = $this->request->getNotifyUrl();

        $payment = new Payment();
        $payment->merchantAccountId = $merchantAccountId;
        $payment->requestId = $this->request->getTransactionId();
        $payment->parentTransactionId = $this->request->getTransactionReference();
        $payment->transactionType = $this->getTransactionType();
        $payment->notifications = [$notification];

        return $payment;
    }

    /**
     * @return string
     */
    abstract protected function getTransactionType();
}
