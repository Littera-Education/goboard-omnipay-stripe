<?php


namespace Omnipay\Stripe\Message;


class FetchTransferRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['id'] = $this->getId();

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/payouts/' . $this->getId();
    }

    public function getHttpMethod()
    {
        return 'GET';
    }


    public function getId()
    {
        return $this->getParameter('id');
    }

    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

}
