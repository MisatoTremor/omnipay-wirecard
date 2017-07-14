<?php

namespace Omnipay\Wirecard;

use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\Wirecard\Message\AbstractRequest;
use Omnipay\Wirecard\Message\Builder\CheckPayerResponseBuilder;
use Omnipay\Wirecard\Message\Builder\DebitBuilder;
use Omnipay\Wirecard\Message\Builder\EnrollmentBuilder;
use Omnipay\Wirecard\Message\Builder\PurchaseBuilder;

/**
 * @method AbstractRequest createRequest(string $class, array $parameters)
 */
class Gateway extends AbstractGateway
{
    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Wirecard';
    }

    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
            'endpoint' => '',
            'testMode' => false,
        );
    }

    public function getEndpoint()
    {
        return $this->getParameter('endpoint');
    }

    public function setEndpoint($value)
    {
        return $this->setParameter('endpoint', $value);
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    /**
     * @param array $parameters
     * @return RequestInterface
     */
    public function enrollmentCheck(array $parameters = array())
    {
        $request = $this->createRequest('\Omnipay\Wirecard\Message\EnrollmentCheckRequest', $parameters);
        $request->setBuilder(new EnrollmentBuilder($request));

        return $request;
    }

    /**
     * @param array $parameters
     * @return RequestInterface
     */
    public function checkPayerResponse(array $parameters = array())
    {
        $request = $this->createRequest('\Omnipay\Wirecard\Message\CheckPayerResponseRequest', $parameters);
        $request->setBuilder(new CheckPayerResponseBuilder($request));
        $request->getCard()->validate();

        return $request;
    }

//    /**
//     * @param array $parameters
//     * @return RequestInterface
//     */
//    public function preauthorization(array $parameters = array())
//    {
//        $request = $this->createRequest('\Omnipay\Wirecard\Message\PreauthorizationRequest', $parameters);
//        $request->setBuilder(new PaymentBuilder($request));
//
//        return $request;
//    }
//
//    /**
//     * @param array $parameters
//     * @return RequestInterface
//     */
//    public function capture(array $parameters = array())
//    {
//        $request = $this->createRequest('\Omnipay\Wirecard\Message\CaptureRequest', $parameters);
//        $request->setBuilder(new ReferencedBuilder($request));
//
//        return $request;
//    }

    /**
     * @param array $parameters
     * @return RequestInterface
     */
    public function purchase(array $parameters = array())
    {
        $request = $this->createRequest('\Omnipay\Wirecard\Message\PurchaseRequest', $parameters);
        $request->setBuilder(new PurchaseBuilder($request));

        return $request;
    }

    /**
     * @param array $parameters
     * @return RequestInterface
     */
    public function debit(array $parameters = array())
    {
        $request = $this->createRequest('\Omnipay\Wirecard\Message\DebitRequest', $parameters);
        $request->setBuilder(new DebitBuilder($request));

        return $request;
    }
//
//    /**
//     * @param array $parameters
//     * @return RequestInterface
//     */
//    public function reversal(array $parameters = array())
//    {
//        $request = $this->createRequest('\Omnipay\Wirecard\Message\ReversalRequest', $parameters);
//        $request->setBuilder(new ReferencedBuilder($request));
//
//        return $request;
//    }
//
//    /**
//     * @param array $parameters
//     * @return RequestInterface
//     */
//    public function query(array $parameters = array())
//    {
//        $request = $this->createRequest('\Omnipay\Wirecard\Message\QueryRequest', $parameters);
//        $request->setBuilder(new ReferencedBuilder($request));
//
//        return $request;
//    }
//
//    /**
//     * @param array $parameters
//     * @return RequestInterface
//     */
//    public function bookBack(array $parameters = array())
//    {
//        $request = $this->createRequest('\Omnipay\Wirecard\Message\BookBackRequest', $parameters);
//        $request->setBuilder(new ReferencedBuilder($request));
//
//        return $request;
//    }
//
//    /**
//     * @param array $parameters
//     * @return RequestInterface
//     */
//    public function originalCredit(array $parameters = array())
//    {
//        $request = $this->createRequest('Omnipay\Wirecard\Message\OriginalCreditRequest', $parameters);
//        $request->setBuilder(new PaymentBuilder($request));
//
//        return $request;
//    }
}
