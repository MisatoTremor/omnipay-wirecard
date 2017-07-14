<?php

namespace Omnipay\Wirecard\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

class EnrollmentCheckResponse extends AbstractResponse implements RedirectResponseInterface
{
    public function isRedirect()
    {
        return $this->getData()->threeD ? $this->getData()->threeD->isRedirect() : false;
    }

    public function getRedirectUrl()
    {
        return $this->getData()->threeD->acsUrl;
    }

    public function getRedirectData()
    {
        return [
            'PaReq' => $this->getData()->threeD->pareq,
            'TermUrl' => $this->getRequest()->getReturnUrl(),
            'MD' => $this->getTransactionReference(),
        ];
    }

    public function getRedirectMethod()
    {
        return 'POST';
    }

}
