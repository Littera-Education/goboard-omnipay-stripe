<?php


namespace Omnipay\Stripe\Message;

class PayoutRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['amount'] = $this->getAmount();
        $data['currency'] = $this->getCurrency();

        if($this->getStripeAccountId()) {
            $data['stripe_account'] = $this->getStripeAccountId();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/payouts';
    }

    public function getStatementDescriptor()
    {
        return $this->getParameter('statementDescriptor');
    }

    public function setStatementDescriptor($value)
    {
        return $this->setParameter('statementDescriptor', $value);
    }


    public function getCurrency()
    {
        return $this->getParameter('currency');
    }

    public function setCurrency($value)
    {
        return $this->setParameter('currency', $value);
    }

    public function getDestination()
    {
        return $this->getParameter('destination');
    }

    public function setDestination($value)
    {
        return $this->setParameter('destination', $value);
    }

    public function getDescription()
    {
        return $this->getParameter('description');
    }

    public function setDescription($value)
    {
        return $this->setParameter('description', $value);
    }


    public function getStripeAccountId()
    {
        return $this->getParameter('stripeAccountId');
    }

    public function setStripeAccountId($value)
    {
        return $this->setParameter('stripeAccountId', $value);
    }

    
}
