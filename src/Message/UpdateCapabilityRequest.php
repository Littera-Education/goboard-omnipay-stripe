<?php


namespace Omnipay\Stripe\Message;

class UpdateCapabilityRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['requested'] = $this->getRequested();

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/accounts/' . $this->getAccountId().'/capabilities/'.$this->getCapability();
    }

    public function getAccountId()
    {
        return $this->getParameter('account_id');
    }

    public function setAccountId($value)
    {
        return $this->setParameter('account_id', $value);
    }

    public function getRequested()
    {
        return $this->getParameter('requested');
    }

    public function setRequested($value)
    {
        return $this->setParameter('requested', $value);
    }
    
    public function getCapability()
    {
        return $this->getParameter('capability');
    }

    public function setCapability($value)
    {
        return $this->setParameter('capability', $value);
    }
}
