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
        $payment->requestId = $this->uuid4();
        $payment->parentTransactionId = $this->request->getTransactionReference();
        $payment->transactionType = $this->getTransactionType();
        $payment->notifications = [$notification];

        return $payment;
    }

    /**
     * @return string
     */
    abstract protected function getTransactionType();

    /**
     * @link https://stackoverflow.com/a/15875555/7774851 By courtesy of Jack
     *
     * @return string
     */
    protected function uuid4()
    {
        $data = random_bytes(16);
        assert(strlen($data) == 16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
