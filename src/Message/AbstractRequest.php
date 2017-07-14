<?php

namespace Omnipay\Wirecard\Message;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Omnipay\Common\Message\ResponseInterface;
use Wirecard\Element\Payment;
use Omnipay\Wirecard\Message\Builder\BuilderInterface;
use RuntimeException;

abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    /**
     * @var BuilderInterface
     */
    private $builder;
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function getData()
    {
        if (!$this->builder) {
            throw new RuntimeException('Builder must be set');
        }

        return $this->getSerializer()->serialize($this->builder->build(), 'xml');
    }

    /**
     * @return BuilderInterface
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * @param BuilderInterface $builder
     *
     * @return $this
     */
    public function setBuilder(BuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer()
    {
        if (!$this->serializer) {
            AnnotationRegistry::registerLoader('class_exists');
            $this->serializer = SerializerBuilder::create()->build();
        }

        return $this->serializer;
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return sprintf($this->getParameter('endpoint'), $this->getTestMode() ? '-test' : '');
    }

    /**
     * @param string $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setEndpoint($value)
    {
        return $this->setParameter('endpoint', $value);
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->getParameter('username');
    }

    /**
     * @param string $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * @param string $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    /**
     * @return string
     */
    public function getMerchantAccountId()
    {
        return $this->getParameter('merchantAccountId');
    }

    /**
     * @param string $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setMerchantAccountId($value)
    {
        return $this->setParameter('merchantAccountId', $value);
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getParameter('countryCode');
    }

    /**
     * @param string $value
     *
     * @return \Omnipay\Common\Message\AbstractRequest
     */
    public function setCountryCode($value)
    {
        return $this->setParameter('countryCode', $value);
    }

    public function sendData($data)
    {
        $response = $this->httpClient
            ->post($this->getEndpoint(), ['Content-Type' => 'application/xml'], $data)
            ->setAuth($this->getUsername(), $this->getPassword())
            ->send();
        /** @var Payment $payment */
        $payment = $this->getSerializer()->deserialize($response->getBody(true), Payment::class, 'xml');

        return $this->createResponse($payment);
    }

    /**
     * @param Payment $data
     *
     * @return ResponseInterface
     */
    abstract protected function createResponse($data);
}
