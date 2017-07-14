<?php

namespace Omnipay\Wirecard\Message\Builder;

use Omnipay\Wirecard\Message\PurchaseRequest;
use Wirecard\Element\ThreeD;

/**
 * @property PurchaseRequest $request
 */
class PurchaseBuilder extends AbstractBuilder
{
    protected function getTransactionType()
    {
        return 'purchase';
    }

    public function build()
    {
        $threeD = new ThreeD();
        $threeD->pares = $this->request->getPaRes();
        $threeD->eci = $this->request->getEci();
        $threeD->xid = $this->request->getXid();
        $threeD->cardholderAuthenticationValue = $this->request->getCardholderAuthenticationValue();

        $payment = parent::build();
        $payment->threeD = $threeD;

        return $payment;
    }
}
