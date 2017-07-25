<?php

namespace Omnipay\Wirecard\Message\Builder;

use Omnipay\Wirecard\Message\DebitRequest;
use Wirecard\Element\AccountHolder;
use Wirecard\Element\BankAccount;
use Wirecard\Element\PaymentMethod;
use Wirecard\Element\RequestedAmount;

/**
 * @property DebitRequest $request
 */
class DebitBuilder extends AbstractBuilder
{
    protected function getTransactionType()
    {
        return 'debit';
    }

    public function build()
    {
        $accountHolder = new AccountHolder();
        $accountHolder->firstName = $this->request->getFirstName();
        $accountHolder->lastName = $this->request->getLastName();

        $bankAccount = new BankAccount();
        $bankAccount->iban = $this->request->getIban();
        $bankAccount->bic = $this->request->getBic();

        $paymentMethod = new PaymentMethod();
        $paymentMethod->name = 'giropay';

        $payment = parent::build();
        $payment->accountHolder = $accountHolder;
        $payment->bankAccount = $bankAccount;
        $payment->requestedAmount = new RequestedAmount($this->request->getAmount(), $this->request->getCurrency());
        $payment->paymentMethods = [$paymentMethod];

        return $payment;
    }
}
