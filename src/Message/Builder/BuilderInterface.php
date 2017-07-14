<?php

namespace Omnipay\Wirecard\Message\Builder;

use Wirecard\Element\Payment;

interface BuilderInterface
{
    /**
     * @return Payment
     */
    public function build();
}
