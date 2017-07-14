<?php

namespace Omnipay\Wirecard\Message;

class CheckPayerResponseResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return parent::isSuccessful() && null !== $this->getData()->threeD && in_array($this->getData()->threeD->cardholderAuthenticationStatus, ['Y', 'A']);
    }

    public function isCancelled()
    {
        return null === $this->getData()->threeD || 'N' === $this->getData()->threeD->cardholderAuthenticationStatus;
    }

    public function isSystemError()
    {
        return null === $this->getData()->threeD || 'E' === $this->getData()->threeD->cardholderAuthenticationStatus;
    }
}
