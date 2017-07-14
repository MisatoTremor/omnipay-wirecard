<?php

namespace Omnipay\Wirecard\Message\Builder;

use Omnipay\Common\CreditCard;
use Omnipay\Wirecard\Message\EnrollmentCheckRequest;
use Wirecard\Element\AccountHolder;
use Wirecard\Element\Card;
use Wirecard\Element\RequestedAmount;

/**
 * @property EnrollmentCheckRequest $request
 */
class EnrollmentBuilder extends AbstractBuilder
{
    protected function getTransactionType()
    {
        return 'check-enrollment';
    }

    public function build()
    {
        /** @var CreditCard $creditCard */
        $creditCard = $this->request->getCard();
        $card = new Card();
        $card->accountNumber = $creditCard->getNumber();
        $card->expirationMonth = $creditCard->getExpiryDate('m');
        $card->expirationYear = $creditCard->getExpiryDate('Y');
        $card->cardType = $creditCard->getBrand();
        $card->cardSecurityCode = $creditCard->getCvv();
        $card->track1 = $creditCard->getTrack1();
        $card->track2 = $creditCard->getTrack2();

        $accountHolder = new AccountHolder();
        $accountHolder->email = $creditCard->getEmail();
        $accountHolder->dateOfBirth = $creditCard->getBirthday() ? (new \DateTime($creditCard->getBirthday())) : null;
        $accountHolder->firstName = $creditCard->getBillingFirstName();
        $accountHolder->lastName = $creditCard->getBillingLastName();

        $payment = parent::build();
        $payment->accountHolder = $accountHolder;
        $payment->requestedAmount = new RequestedAmount($this->request->getAmount(), $this->request->getCurrency());
        $payment->card = $card;

        return $payment;
    }
}
