<?php

namespace Omnipay\Wirecard\Message;

class PurchaseRequest extends AbstractRequest
{
    public function getPaRes()
    {
        return $this->getParameter('paRes');
    }

    public function setPaRes($value)
    {
        return $this->setParameter('paRes', $value);
    }

    public function getEci()
    {
        return $this->getParameter('eci');
    }

    public function setEci($value)
    {
        return $this->setParameter('eci', $value);
    }

    public function getXid()
    {
        return $this->getParameter('xid');
    }

    public function setXid($value)
    {
        return $this->setParameter('xid', $value);
    }

    public function getCardholderAuthenticationValue()
    {
        return $this->getParameter('cardholderAuthenticationValue');
    }

    public function setCardholderAuthenticationValue($value)
    {
        return $this->setParameter('cardholderAuthenticationValue', $value);
    }

    protected function createResponse($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}
