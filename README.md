Omnipay gateway implementation for the [Wirecard Payment Processing API](https://document-center.wirecard.com/display/PTD/REST+API)

# Usage

### Creditcard enrollment check

```php
$gateway = Omnipay::create('Wirecard');
$gateway->setUsername($apiUsername);
$gateway->setPassword($apiPassword);
$gateway->setEndpoint('https://api%s.wirecard.com/engine/rest/payments/');
$gateway->setTestMode(true);
$data = [
    'merchantAccountId' => $maid,
    'amount' => number_format($total, 2, '.', ''),
    'currency' => 'EUR',
    'card' => [
        'firstName' => $firstName,
        'lastName' => $lastName,
        'number' => $cardNumber,
        'cvv' => $cardCvv,
        'expiryMonth' => $cardMonth,
        'expiryYear' => $cardYear,
    ],
    'returnUrl' => '/wirecard/creditcard', // Your API endpoint for processing after 3-D-Secure
];
$response = $gateway->enrollmentCheck($data)->send();
if ($response->isSuccessful() && $response->isRedirect()) {
    $response->redirect(); // Redirect to 3-D-Secure processing, this will redirect to your endpoint upon completion
} elseif ($response->isLiabilityShiftGranted()) {
    $data = [
        'merchantAccountId' => $maid,
        'transactionReference' => $response->getTransactionReference(),
    ];
    $response = $gateway->purchase($data)->send();
    if ($response->isSuccessful()) {
        // Complete order
    }
}
```

### Creditcard 3-D-Secure check (/wirecard/creditcard)
```php
$gateway = Omnipay::create('Wirecard');
$gateway->setUsername($apiUsername);
$gateway->setPassword($apiPassword);
$gateway->setEndpoint('https://api%s.wirecard.com/engine/rest/payments/');
$gateway->setTestMode(true);
$data = [
    'merchantAccountId' => $maid,
    'transactionReference' => $_POST['MD'],
    'paRes' => $_POST['PaRes'],
];
$response = $gateway->checkPayerResponse($data)->send();
if ($response->isSuccessful()) {
    $responseData = $response->getData();
    $data = [
        'merchantAccountId' => $maid,
        'transactionReference' => $responseData->transactionId,
        'paRes' => $responseData->threeD->pares,
        'eci' => $responseData->threeD->eci,
        'xid' => $responseData->threeD->xid,
        'cardholderAuthenticationValue' => $responseData->threeD->cardholderAuthenticationValue,
    ];
    $response = $gateway->purchase($data)->send();
    if ($response->isSuccessful()) {
        // Complete order
    }
}
```
