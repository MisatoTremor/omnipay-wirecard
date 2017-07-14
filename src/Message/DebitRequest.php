<?php

namespace Omnipay\Wirecard\Message;

class DebitRequest extends AbstractRequest
{
    public function getIban()
    {
        return $this->getParameter('iban');
    }

    public function setIban($value)
    {
        return $this->setParameter('iban', $value);
    }

    public function getBic()
    {
        return $this->getParameter('bic');
    }

    public function setBic($value)
    {
        return $this->setParameter('bic', $value);
    }
    public function getFirstName()
    {
        return $this->getParameter('firstName');
    }

    public function setFirstName($value)
    {
        return $this->setParameter('firstName', $value);
    }

    public function getLastName()
    {
        return $this->getParameter('lastName');
    }

    public function setLastName($value)
    {
        return $this->setParameter('lastName', $value);
    }

    protected function createResponse($data)
    {
        return $this->response = new DebitResponse($this, $data);
    }
}
