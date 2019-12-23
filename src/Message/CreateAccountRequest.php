<?php


namespace Omnipay\Stripe\Message;


class CreateAccountRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        //$data['managed'] = $this->getManaged();
        $data['type'] = 'custom';
        $data['email'] = $this->getEmail();
        $data['external_account'] = $this->getExternalAccount();
        $data['individual'] = $this->getIndividual();
        $data['requested_capabilities'] = ['transfers']; // ,'card_payments' removed due to large amount of additional information it need to be collecte

        if($this->getBusinessProfile()) {
            $data['business_profile'] = $this->getBusinessProfile();
        }

        if($this->getStatementDescriptor()) {
            $data['statement_descriptor'] = $this->getStatementDescriptor();
        }

        if($this->getTransferSchedule()) {
            $data['settings'] = ['payouts' => ['schedule' => $this->getTransferSchedule()]];
            // $data['transfer_schedule'] = $this->getTransferSchedule(); // obsolete does ot exists in new API from 2019
        }

        if($this->getBusinessType()) {
            $data['business_type'] = $this->getBusinessType();
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

    public function getIndividual()
    {
        return $this->getParameter('individual');
    }

    public function setIndividual($value)
    {
        return $this->setParameter('individual', $value);
    }

    public function getExternalAccount()
    {
        return $this->getParameter('external_account');
    }

    public function setExternalAccount($value)
    {
        return $this->setParameter('external_account', $value);
    }

    
    public function getBusinessProfile()
    {
        return $this->getParameter('business_profile');
    }

    public function setBusinessProfile($value)
    {
        return $this->setParameter('business_profile', $value);
    }        
    
    public function getBusinessType()
    {
        return $this->getParameter('business_type');
    }

    public function setBusinessType($value)
    {
        return $this->setParameter('business_type', $value);
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
