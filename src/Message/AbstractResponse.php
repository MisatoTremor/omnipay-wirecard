<?php

namespace Omnipay\Wirecard\Message;

/**
 * @method \Wirecard\Element\Payment getData()
 */
class AbstractResponse extends \Omnipay\Common\Message\AbstractResponse
{
    public function getTransactionReference()
    {
        return $this->getData()->transactionId;
    }

    public function isSuccessful()
    {
        return $this->getData()->isSuccessful();
    }

    public function getMessage()
    {
        return $this->getData()->getMessage();
    }

    public function getCode()
    {
        return $this->getData()->getCode();
    }

    public function getToken()
    {
        return $this->getData()->cardToken;
    }
}
