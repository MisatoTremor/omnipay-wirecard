<?php

namespace Omnipay\Wirecard\Message;

class DebitResponse extends AbstractResponse
{
    public function isRedirect()
    {
        return isset($this->getData()->paymentMethods[0]) ? $this->getData()->paymentMethods[0]->isRedirect() : false;
    }

    public function getRedirectUrl()
    {
        return $this->getData()->paymentMethods[0]->url;
    }

    public function getRedirectMethod()
    {
        return 'GET';
    }
}
