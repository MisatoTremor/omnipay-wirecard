<?php

namespace Omnipay\Wirecard\Message\Builder;

use Omnipay\Wirecard\Message\DebitRequest;
use Wirecard\Element\AccountHolder;
use Wirecard\Element\BankAccount;

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

        $payment = parent::build();
        $payment->accountHolder = $accountHolder;
        $payment->bankAccount = $bankAccount;

        return $payment;
    }
}
