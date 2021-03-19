<?php

namespace Omnipay\Wirecard;

use JMS\Serializer\SerializerInterface;
use Omnipay\Tests\GatewayTestCase;
use org\bovigo\vfs\vfsStream;

class GatewayTest extends GatewayTestCase
{
    /**
     * @var Gateway
     */
    protected $gateway;

    protected function setUp()
    {
        parent::setUp();
        $this->gateway = new Gateway($this->getHttpClient(), $this->getHttpRequest());
    }

    public function testSerializer()
    {
        $gateway = $this->gateway;
        /** @var SerializerInterface $serializer */
        self::assertInstanceOf('\JMS\Serializer\SerializerInterface', $gateway->getSerializer());
        $serializer = $this->getMock('\JMS\Serializer\SerializerInterface');
        self::assertSame($gateway, $gateway->setSerializer($serializer));
        self::assertSame($serializer, $gateway->getSerializer());
    }

    public function testSupportsEnrollment()
    {
        $data = [
            'card' => [
                'firstName' => 'A',
                'lastName' => 'B',
                'number' => '4012000300001003',
                'cvv' => '003',
                'expiryMonth' => '01',
                'expiryYear' => '2019',
            ],
        ];
        self::assertInstanceOf('Omnipay\Common\Message\RequestInterface', $this->gateway->enrollmentCheck($data));
    }

    public function testSupportsCheckPayerResponse()
    {
        self::assertInstanceOf('Omnipay\Common\Message\RequestInterface', $this->gateway->checkPayerResponse());
    }

    public function testSupportsPurchase()
    {
        self::assertInstanceOf('Omnipay\Common\Message\RequestInterface', $this->gateway->purchase());
    }

    public function testSupportsDebit()
    {
        self::assertInstanceOf('Omnipay\Common\Message\RequestInterface', $this->gateway->debit());
    }

    public function testSupportsCheckDebitResponse()
    {
        $data = <<<DATA
<?xml version="1.0" encoding="UTF-8"?>
<payment xmlns="http://www.elastic-payments.com/schema/payment">
    <merchant-account-id>30b38233-b0a9-4874-9cbb-7c6de135b7e7</merchant-account-id>
    <transaction-id>aa615401-16a9-11e5-87be-00163e5411b5</transaction-id>
    <request-id>62b1caa0-902b-4130-8156-75fa184941cb</request-id>
    <transaction-type>debit</transaction-type>
    <transaction-state>success</transaction-state>
    <completion-time-stamp>2015-06-19T17:36:06.000Z</completion-time-stamp>
    <statuses>
        <status code="201.0000" description="giropay:The resource was successfully created." severity="information"/>
    </statuses>
    <requested-amount currency="EUR">1.000000</requested-amount>
    <ip-address>127.0.0.1</ip-address>
    <notifications>
        <notification url="http://requestb.in/vbp3hxvb"/>
    </notifications>
    <payment-methods>
        <payment-method name="giropay"/>
    </payment-methods>
    <api-id>---</api-id>
    <provider-transaction-reference-id>ced4f3e9-fad1-428a-8912-f203d6011e2e</provider-transaction-reference-id>
    <Signature xmlns="http://www.w3.org/2000/09/xmldsig#">
        <SignedInfo>
            <CanonicalizationMethod Algorithm="http://www.w3.org/TR/2001/REC-xml-c14n-20010315"/>
            <SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"/>
            <Reference URI="">
                <Transforms>
                    <Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"/>
                </Transforms>
                <DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"/>
                <DigestValue>Y3kYiVcagkfQ2xW3pFA9PW6o4DM=</DigestValue>
            </Reference>
        </SignedInfo>
        <SignatureValue>aTX+yrBWsBjadhJrb9JHjG2iBsebztILibnAOgiJfejUM9LlkqLU3ptQw++IGTm+DcfsiLGDMWKI
dn5D4cgFcMTzoys79Gauv6j5CzsUEHqESc13P582jhfFJd/4T/FiHKxdf3scfwObx12NS+hbCi5R
kKi8d6S4QvXvmTNWRPWa1IptG/JX7XnjszOUTbHrsKxa39/j0yiCgDmdzdWbH23KdpwdwCowBg0B
L5/1pf4i4gf2/+fuyJHehjbM42FgQLME2oPzeDkn2Ix8p+Ry7cGP+8gQDAykDFlVOgvgLCH2s3M1
URrgMQQRG/mjcVxJ6LUfQIJuORa1ujgtq+lfhg==</SignatureValue>
        <KeyInfo>
            <X509Data>
                <X509SubjectName>CN=*.thesolution.com,OU=Domain Control Validated,O=*.thesolution.com</X509SubjectName>
                <X509Certificate>MIIFaTCCBFGgAwIBAgIHS05K//8WnzANBgkqhkiG9w0BAQUFADCByjELMAkGA1UEBhMCVVMxEDAO
BgNVBAgTB0FyaXpvbmExEzARBgNVBAcTClNjb3R0c2RhbGUxGjAYBgNVBAoTEUdvRGFkZHkuY29t
LCBJbmMuMTMwMQYDVQQLEypodHRwOi8vY2VydGlmaWNhdGVzLmdvZGFkZHkuY29tL3JlcG9zaXRv
cnkxMDAuBgNVBAMTJ0dvIERhZGR5IFNlY3VyZSBDZXJ0aWZpY2F0aW9uIEF1dGhvcml0eTERMA8G
A1UEBRMIMDc5NjkyODcwHhcNMTExMTAxMTM1MzQxWhcNMTIxMjAxMTY0MTUwWjBbMRowGAYDVQQK
DBEqLnRoZXNvbHV0aW9uLmNvbTEhMB8GA1UECwwYRG9tYWluIENvbnRyb2wgVmFsaWRhdGVkMRow
GAYDVQQDDBEqLnRoZXNvbHV0aW9uLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEB
AKdw14rJ3PjXr8NbZFypT14XRKpBLuwH+Y8+GPq7mb+X4D20ZHwQklPvO1DsHbnKf4PfbxlSeX+i
jwJ78fDuM9yezS193wzmzJzBnpUkvduiPD7lBpx87tIVT9Hcpt9dMrqF4Y9UByzOws77gMux5gHF
tV9KmSL7RF0rHSCm5/27n9hzxAffspZXhS3l1cBKGkIiltt5OlGnCGCZvFruyw2R7W/Z9MxxtLOn
+YdB6i04fc4oygtvzt4DycZ0ZwjT10W3E7/k/xGUx/pYH9RLN3Niu9xanRLESJlt2ohFXoE2eArP
+y+QAyj8c4P+k6bPwZegXCFsNHXP6VJyDZtOLSECAwEAAaOCAcAwggG8MA8GA1UdEwEB/wQFMAMB
AQAwHQYDVR0lBBYwFAYIKwYBBQUHAwEGCCsGAQUFBwMCMA4GA1UdDwEB/wQEAwIFoDAzBgNVHR8E
LDAqMCigJqAkhiJodHRwOi8vY3JsLmdvZGFkZHkuY29tL2dkczEtNTkuY3JsMFMGA1UdIARMMEow
SAYLYIZIAYb9bQEHFwEwOTA3BggrBgEFBQcCARYraHR0cDovL2NlcnRpZmljYXRlcy5nb2RhZGR5
LmNvbS9yZXBvc2l0b3J5LzCBgAYIKwYBBQUHAQEEdDByMCQGCCsGAQUFBzABhhhodHRwOi8vb2Nz
cC5nb2RhZGR5LmNvbS8wSgYIKwYBBQUHMAKGPmh0dHA6Ly9jZXJ0aWZpY2F0ZXMuZ29kYWRkeS5j
b20vcmVwb3NpdG9yeS9nZF9pbnRlcm1lZGlhdGUuY3J0MB8GA1UdIwQYMBaAFP2sYTKTbEXW4u6F
X5q653aZaMznMC0GA1UdEQQmMCSCESoudGhlc29sdXRpb24uY29tgg90aGVzb2x1dGlvbi5jb20w
HQYDVR0OBBYEFGWt8Z80Urg6pSHSiuot3idSbCOHMA0GCSqGSIb3DQEBBQUAA4IBAQBrdO66l5sg
s9zUIKiY1oQsKah69RkcQo1f7cwBwNDQLi/DY0KD4efWjOjeon3noaoJ26rrfKyfCE8ShmjGcOuL
4YdEFdvuFgEIBe86jg5CnVF0vNfdiaIMJXAE/SaoK/b/NabepcvwC2/A+snNaf4kmJkDbHg3IvIY
62znQhzyQWzpYRYaA36XlBxhoYoz8jKLntfSF/SvXCy/f+J9+55T1r/U2kM5Ulem7z9PsaJUHJjl
M35hH6Phh1kFU8r0FCuySsfPdyqZe5Xc/bP7yOub4XINvnIEZMcDQfL+PCIEdYDxNbYM6+gtCl78
8Bz9XY5A6TrXcazIPwW/t3jTZRs/</X509Certificate>
            </X509Data>
        </KeyInfo>
    </Signature>
</payment>
DATA;
        vfsStream::setup('input', null, ['data' => $data]);
        self::assertInstanceOf('Wirecard\Element\Payment', $this->gateway->checkDebitResponse('vfs://input/data'));
    }
}
