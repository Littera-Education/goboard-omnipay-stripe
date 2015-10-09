<?php


namespace Omnipay\Stripe\Message;

class TransferRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['amount'] = $this->getAmount();
        $data['currency'] = $this->getCurrency();

        if($this->getDestination()) {
            $data['destination'] = $this->getDestination();
        }


        if($this->getStatementDescriptor()) {
            $data['statement_descriptor'] = $this->getStatementDescriptor();
        }

        if($this->getSourceTransaction()) {
            $data['source_transaction'] = $this->getSourceTransaction();
        }

        if($this->getDescription()) {
            $data['description'] = $this->getDescription();
        }

        if($this->getRecipient()) {
            $data['recipient'] = $this->getRecipient();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/transfers';
    }

    public function getRecipient()
    {
        return $this->getParameter('recipient');
    }

    public function setRecipient($value)
    {
        return $this->setParameter('recipient', $value);
    }

    public function getSourceTransaction()
    {
        return $this->getParameter('sourceTransaction');
    }

    public function setSourceTransaction($value)
    {
        return $this->setParameter('sourceTransaction', $value);
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

}
