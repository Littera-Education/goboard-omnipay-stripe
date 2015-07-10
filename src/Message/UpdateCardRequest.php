<?php
/**
 * Stripe Update Credit Card Request
 */

namespace Omnipay\Stripe\Message;

/**
 * Stripe Update Credit Card Request
 *
 * If you need to update only some card details, like the billing
 * address or expiration date, you can do so without having to re-enter
 * the full card details. Stripe also works directly with card networks
 * so that your customers can continue using your service without
 * interruption.
 *
 * When you update a card, Stripe will automatically validate the card.
 *
 * This requires both a customerReference and a cardReference.
 *
 * @link https://stripe.com/docs/api#update_card
 */
class UpdateCardRequest extends AbstractRequest
{
    public function getData()
    {
        $data = array();
        $data['exp_month'] = $this->getExpMonth();
        $data['exp_year'] = $this->getExpYear();

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/customers/' . $this->getCustomerId() .
            '/cards/' . $this->getId();
    }


    public function getId()
    {
        return $this->getParameter('id');
    }

    public function setId($value)
    {
        return $this->setParameter('id', $value);
    }

    public function getCustomerId()
    {
        return $this->getParameter('customerId');
    }

    public function setCustomerId($value)
    {
        return $this->setParameter('customerId', $value);
    }

    public function getExpMonth()
    {
        return $this->getParameter('expMonth');
    }

    public function setExpMonth($value)
    {
        return $this->setParameter('expMonth', $value);
    }

    public function getExpYear()
    {
        return $this->getParameter('expYear');
    }

    public function setExpYear($value)
    {
        return $this->setParameter('expYear', $value);
    }
}
