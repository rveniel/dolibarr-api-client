<?php

namespace Dolibarr\Client\Domain\Invoices;


use JMS\Serializer\Annotation as JMS;

/**
 * Invoice class
 *
 * @author Rodolphe Veniel <rodolphe.veniel@gmail.com>
 */
final class Invoice
{
    /**
     * @JMS\SerializedName("socid")
     * @JMS\Type("int")
     */
    private $thirdpartyId;

    /**
     * @JMS\SerializedName("last_main_doc")
     * @JMS\Type("string")
     */
    private $lastMainDoc;

    /**
     * @JMS\Type("int")
     */
    private $id;

    /**
     * @JMS\SerializedName("total_ht")
     * @JMS\Type("float")
     */
    private $totalHT;

    /**
     * @JMS\SerializedName("total_tva")
     * @JMS\Type("float")
     */
    private $totalTVA;

    /**
     * @JMS\SerializedName("total_ttc")
     * @JMS\Type("float")
     */
    private $totalTTC;

    /**
     * @JMS\Type("float")
     */
    private $totalpaid;

    /**
     * @JMS\Type("float")
     */
    private $remaintopay;

    /**
     * @JMS\Type("string")
     */
    private $ref;

    /**
     * @JMS\Type("int")
     */
    private $statut;

    /**
     * @JMS\Type("int")
     */
    private $status;

    /**
     * @JMS\Type("int")
     */
    private $paye;

    /**
     * @JMS\SerializedName("date_lim_reglement")
     * @JMS\Type("int")
     */
    private $paymentLimitTimestamp;

    /**
     * @JMS\SerializedName("date_validation")
     * @JMS\Type("int")
     */
    private $dateValidation;

    /**
     * @var InvoiceLine[]
     * @JMS\Type("array<Dolibarr\Client\Domain\Invoices\InvoiceLine>")
     */
    private $lines;

    /**
     * @return mixed
     */
    public function getThirdpartyId()
    {
        return $this->thirdpartyId;
    }

    /**
     * @param mixed $thirdpartyId
     */
    public function setThirdpartyId($thirdpartyId)
    {
        $this->thirdpartyId = $thirdpartyId;
    }

    /**
     * @return mixed
     */
    public function getLastMainDoc()
    {
        return $this->lastMainDoc;
    }

    /**
     * @param mixed $lastMainDoc
     */
    public function setLastMainDoc($lastMainDoc)
    {
        $this->lastMainDoc = $lastMainDoc;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTotalHT()
    {
        return $this->totalHT;
    }

    /**
     * @param mixed $totalHT
     */
    public function setTotalHT($totalHT)
    {
        $this->totalHT = $totalHT;
    }

    /**
     * @return mixed
     */
    public function getTotalTVA()
    {
        return $this->totalTVA;
    }

    /**
     * @param mixed $totalTVA
     */
    public function setTotalTVA($totalTVA)
    {
        $this->totalTVA = $totalTVA;
    }

    /**
     * @return mixed
     */
    public function getTotalTTC()
    {
        return $this->totalTTC;
    }

    /**
     * @param mixed $totalTTC
     */
    public function setTotalTTC($totalTTC)
    {
        $this->totalTTC = $totalTTC;
    }

    /**
     * @return mixed
     */
    public function getTotalpaid()
    {
        return $this->totalpaid;
    }

    /**
     * @param mixed $totalpaid
     */
    public function setTotalpaid($totalpaid)
    {
        $this->totalpaid = $totalpaid;
    }

    /**
     * @return mixed
     */
    public function getRemaintopay()
    {
        return $this->remaintopay;
    }

    /**
     * @param mixed $remaintopay
     */
    public function setRemaintopay($remaintopay)
    {
        $this->remaintopay = $remaintopay;
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
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getPaye()
    {
        return $this->paye;
    }

    /**
     * @param mixed $paye
     */
    public function setPaye($paye)
    {
        $this->paye = $paye;
    }

    /**
     * @return mixed
     */
    public function getPaymentLimitTimestamp()
    {
        return $this->paymentLimitTimestamp;
    }

    /**
     * @param mixed $paymentLimitTimestamp
     */
    public function setPaymentLimitTimestamp($paymentLimitTimestamp)
    {
        $this->paymentLimitTimestamp = $paymentLimitTimestamp;
    }

    /**
     * @return mixed
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * @param mixed $dateValidation
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;
    }

    /**
     * @return InvoiceLine[]
     */
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * @param InvoiceLine[] $lines
     */
    public function setLines($lines)
    {
        $this->lines = $lines;
    }
}
