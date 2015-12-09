<?php


namespace Omnipay\Stripe\Message;


class FetchChargeRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['charge'] = $this->getCharge();

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/charges/' . $this->getCharge();
    }

    public function getHttpMethod()
    {
        return 'GET';
    }


    public function getCharge()
    {
        return $this->getParameter('charge');
    }

    public function setCharge($value)
    {
        return $this->setParameter('charge', $value);
    }

}
