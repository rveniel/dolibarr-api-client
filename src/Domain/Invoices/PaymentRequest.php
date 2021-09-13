<?php


namespace Dolibarr\Client\Domain\Invoices;


use JMS\Serializer\Annotation as JMS;

class PaymentRequest
{
    /**
     * @JMS\Type("string")
     */
    private $datepaye;

    /**
     * @JMS\Type("int")
     */
    private $paymentid;

    /**
     * @JMS\Type("string")
     */
    private $closepaidinvoices;

    /**
     * @JMS\Type("int")
     */
    private $accountid;

    /**
     * @JMS\SerializedName("num_payment")
     * @JMS\Type("string")
     */
    private $numPayment;

    /**
     * @JMS\Type("string")
     */
    private $comment;

    /**
     * @JMS\Type("string")
     */
    private $chqemetteur;

    /**
     * @JMS\Type("string")
     */
    private $chqbank;

    /**
     * @return mixed
     */
    public function getDatepaye()
    {
        return $this->datepaye;
    }

    /**
     * @param mixed $datepaye
     * @return PaymentRequest
     */
    public function setDatepaye($datepaye)
    {
        $this->datepaye = $datepaye;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentid()
    {
        return $this->paymentid;
    }

    /**
     * @param mixed $paymentid
     * @return PaymentRequest
     */
    public function setPaymentid($paymentid)
    {
        $this->paymentid = $paymentid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getClosepaidinvoices()
    {
        return $this->closepaidinvoices;
    }

    /**
     * @param mixed $closepaidinvoices
     * @return PaymentRequest
     */
    public function setClosepaidinvoices($closepaidinvoices)
    {
        $this->closepaidinvoices = $closepaidinvoices;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * @param mixed $accountid
     * @return PaymentRequest
     */
    public function setAccountid($accountid)
    {
        $this->accountid = $accountid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumPayment()
    {
        return $this->numPayment;
    }

    /**
     * @param mixed $numPayment
     * @return PaymentRequest
     */
    public function setNumPayment($numPayment)
    {
        $this->numPayment = $numPayment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     * @return PaymentRequest
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChqemetteur()
    {
        return $this->chqemetteur;
    }

    /**
     * @param mixed $chqemetteur
     * @return PaymentRequest
     */
    public function setChqemetteur($chqemetteur)
    {
        $this->chqemetteur = $chqemetteur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChqbank()
    {
        return $this->chqbank;
    }

    /**
     * @param mixed $chqbank
     * @return PaymentRequest
     */
    public function setChqbank($chqbank)
    {
        $this->chqbank = $chqbank;
        return $this;
    }
}
