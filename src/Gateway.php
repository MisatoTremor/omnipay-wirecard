<?php

namespace Omnipay\Wirecard;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Omnipay\Common\AbstractGateway;
use Omnipay\Common\Message\RequestInterface;
use Omnipay\Wirecard\Message\AbstractRequest;
use Omnipay\Wirecard\Message\Builder\CheckPayerResponseBuilder;
use Omnipay\Wirecard\Message\Builder\DebitBuilder;
use Omnipay\Wirecard\Message\Builder\EnrollmentBuilder;
use Omnipay\Wirecard\Message\Builder\PurchaseBuilder;
use Wirecard\Element\Payment;

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

    public function initialize(array $parameters = array())
    {
        if (!isset($parameters['serializer'])) {
            AnnotationRegistry::registerLoader('class_exists');
            $parameters['serializer'] = SerializerBuilder::create()->build();
        }

        return parent::initialize($parameters);
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
     * @param SerializerInterface $serializer
     *
     * @return $this
     */
    public function setSerializer(SerializerInterface $serializer)
    {
        return $this->setParameter('serializer', $serializer);
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer()
    {
        return $this->getParameter('serializer');
    }

    /**
     * @param array $parameters
     *
     * @return RequestInterface
     */
    public function enrollmentCheck(array $parameters = array())
    {
        $request = $this->createRequest('\Omnipay\Wirecard\Message\EnrollmentCheckRequest', $parameters);
        $request->setBuilder(new EnrollmentBuilder($request));
        $request->getCard()->validate();

        return $request;
    }

    /**
     * @param array $parameters
     *
     * @return RequestInterface
     */
    public function checkPayerResponse(array $parameters = array())
    {
        $request = $this->createRequest('\Omnipay\Wirecard\Message\CheckPayerResponseRequest', $parameters);
        $request->setBuilder(new CheckPayerResponseBuilder($request));

        return $request;
    }

    /**
     * @param array $parameters
     *
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
     *
     * @return RequestInterface
     */
    public function debit(array $parameters = array())
    {
        $request = $this->createRequest('\Omnipay\Wirecard\Message\DebitRequest', $parameters);
        $request->setBuilder(new DebitBuilder($request));

        return $request;
    }

    /**
     * @return Payment
     */
    public function checkDebitResponse()
    {
        return $this->getSerializer()->deserialize(file_get_contents('php://input'), Payment::class, 'xml');
    }
}
