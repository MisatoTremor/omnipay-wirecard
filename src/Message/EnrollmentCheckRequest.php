<?php

namespace Omnipay\Wirecard\Message;

class EnrollmentCheckRequest extends AbstractRequest
{
    protected function createResponse($data)
    {
        return $this->response = new EnrollmentCheckResponse($this, $data);
    }
}
