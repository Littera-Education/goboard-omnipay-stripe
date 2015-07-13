<?php


namespace Omnipay\Stripe\Message;


class CreateAccountRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['managed'] = $this->getManaged();
        $data['email'] = $this->getEmail();
        $data['external_account'] = $this->getExternalAccount();

        if($this->getStatementDescriptor()) {
            $data['statement_descriptor'] = $this->getStatementDescriptor();
        }
        if($this->getTransferSchedule()) {
            $data['transfer_schedule'] = $this->getTransferSchedule();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/accounts';
    }


    public function getManaged()
    {
        return $this->getParameter('managed');
    }

    public function setManaged($value)
    {
        return $this->setParameter('managed', $value);
    }

    public function getEmail()
    {
        return $this->getParameter('email');
    }

    public function setEmail($value)
    {
        return $this->setParameter('email', $value);
    }


    public function getExternalAccount()
    {
        return $this->getParameter('externalAccount');
    }

    public function setExternalAccount($value)
    {
        return $this->setParameter('externalAccount', $value);
    }

    public function getStatementDescriptor()
    {
        return $this->getParameter('statementDescriptor');
    }

    public function setStatementDescriptor($value)
    {
        return $this->setParameter('statementDescriptor', $value);
    }

    public function getTransferSchedule()
    {
        return $this->getParameter('transferSchedule');
    }

    public function setTransferSchedule($value)
    {
        return $this->setParameter('transferSchedule', $value);
    }
}
