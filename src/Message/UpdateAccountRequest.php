<?php


namespace Omnipay\Stripe\Message;


class UpdateAccountRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['email'] = $this->getEmail();
        $data['external_account'] = $this->getExternalAccount();
        //$data['legal_entity'] = $this->getLegalEntity(); // removed due to new Stripe API

        if($this->getStatementDescriptor()) {
            $data['statement_descriptor'] = $this->getStatementDescriptor();
        }
        if($this->getTransferSchedule()) {
            $data['settings'] = ['payouts' => ['schedule' => $this->getTransferSchedule()]];
        }

        if($this->getTosAcceptance()) {
            $data['tos_acceptance'] = $this->getTosAcceptance();
        }

        if($this->getIndividual()) {
            $data['individual'] = $this->getIndividual();
        }

        if($this->getBusinessType()) {
            $data['business_type'] = $this->getBusinessType();
        }
        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/accounts/' . $this->getAccountId();
    }


    public function getAccountId()
    {
        return $this->getParameter('accountId');
    }

    public function setAccountId($value)
    {
        return $this->setParameter('accountId', $value);
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

    public function getIndividual()
    {
        return $this->getParameter('individual');
    }

    public function setIndividual($value)
    {
        return $this->setParameter('individual', $value);
    }

    public function getBusinessType()
    {
        return $this->getParameter('business_type');
    }

    public function setBusinessType($value)
    {
        return $this->setParameter('business_type', $value);
    }    
    
    public function getLegalEntity()
    {
        return $this->getParameter('legalEntity');
    }

    public function setLegalEntity($value)
    {
        return $this->setParameter('legalEntity', $value);
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

    public function getTosAcceptance()
    {
        return $this->getParameter('tosAcceptance');
    }

    public function setTosAcceptance($value)
    {
        return $this->setParameter('tosAcceptance', $value);
    }
}
