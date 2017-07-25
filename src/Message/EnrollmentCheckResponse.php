<?php

namespace Omnipay\Wirecard\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

class EnrollmentCheckResponse extends AbstractResponse implements RedirectResponseInterface
{
    public function isRedirect()
    {
        return $this->getData()->threeD ? $this->getData()->threeD->isRedirect() : false;
    }

    /**
     * @return bool
     */
    public function isLiabilityShiftGranted()
    {
        if ('N' !== $this->getData()->threeD->cardholderAuthenticationStatus) {
            return false;
        }
        // Check for liability shift indicating status codes
        foreach ($this->getData()->statuses as $status) {
            if (in_array($status->code, ['500.1072', '500.1075'])) {
                return true;
            }
        }

        return false;
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
