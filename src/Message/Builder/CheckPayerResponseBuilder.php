<?php

namespace Omnipay\Wirecard\Message\Builder;

use Omnipay\Wirecard\Message\CheckPayerResponseRequest;
use Wirecard\Element\ThreeD;

/**
 * @property CheckPayerResponseRequest $request
 */
class CheckPayerResponseBuilder extends AbstractBuilder
{
    protected function getTransactionType()
    {
        return 'check-payer-response';
    }

    public function build()
    {
        $threeD = new ThreeD();
        $threeD->pares = $this->request->getPaRes();

        $payment = parent::build();
        $payment->threeD = $threeD;

        return $payment;
    }
}
