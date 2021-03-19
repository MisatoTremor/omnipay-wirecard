<?php

/*
 * This file is part of the PLEGRO application.
 *
 * (c) AS-Trainer <http://www.as-trainer.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Omnipay\Wirecard\Message\Builder;

use RuntimeException;
use Wirecard\Element\Cryptogram;
use Wirecard\Element\PaymentMethod;

/**
 * @author Steffen Roßkamp <steffen.rosskamp@gimmickmedia.de>
 */
class ApplePayPurchaseBuilder extends AbstractBuilder
{
    protected function getTransactionType()
    {
        return 'purchase';
    }

    public function build()
    {
        $paymentMethod = new PaymentMethod();
        $paymentMethod->name = 'creditcard';
        $payment = parent::build();
        $token = $this->request->getToken();
        $payment->cryptogram = new Cryptogram('apple-pay', $this->request->getToken());
        $payment->paymentMethods = [$paymentMethod];

        return $payment;
    }
}
