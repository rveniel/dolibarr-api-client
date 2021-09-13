<?php


namespace Dolibarr\Client\Domain\Invoices;


use JMS\Serializer\Annotation as JMS;

class Payment
{
    /**
     * @JMS\Type("float")
     */
    private $amount;

    /**
     * @JMS\Type("string")
     */
    private $type;

    /**
     * @JMS\Type("string")
     */
    private $date;

    /**
     * @JMS\Type("string")
     */
    private $num;

    /**
     * @JMS\Type("string")
     */
    private $ref;

    /**
     * @JMS\SerializedName("ref_ext")
     * @JMS\Type("string")
     */
    private $refExt;

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return Payment
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return Payment
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     * @return Payment
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     * @return Payment
     */
    public function setNum($num)
    {
        $this->num = $num;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * @param mixed $ref
     * @return Payment
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRefExt()
    {
        return $this->refExt;
    }

    /**
     * @param mixed $refExt
     * @return Payment
     */
    public function setRefExt($refExt)
    {
        $this->refExt = $refExt;
        return $this;
    }
}
