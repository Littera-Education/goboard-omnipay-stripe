<?php


namespace Omnipay\Stripe\Message;

class BalanceRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();


        return $data;
    }

    public function getHttpMethod()
    {
        return 'GET';
    }

    public function getEndpoint()
    {
        return $this->endpoint.'/balance';
    }

}
