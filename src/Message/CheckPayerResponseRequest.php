<?php

namespace Omnipay\Wirecard\Message;

class CheckPayerResponseRequest extends AbstractRequest
{
    public function getPaRes()
    {
        return $this->getParameter('paRes');
    }

    public function setPaRes($value)
    {
        return $this->setParameter('paRes', $value);
    }

    protected function createResponse($data)
    {
        return $this->response = new CheckPayerResponseResponse($this, $data);
    }
}
