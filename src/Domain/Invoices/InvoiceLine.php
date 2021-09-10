<?php

namespace Dolibarr\Client\Domain\Invoices;


use JMS\Serializer\Annotation as JMS;

/**
 * Invoice line class
 *
 * @author Rodolphe Veniel <rodolphe.veniel@gmail.com>
 */
final class InvoiceLine
{
    /**
     * @JMS\SerializedName("fk_facture")
     * @JMS\Type("int")
     */
    private $invoiceId;

    /**
     * @JMS\Type("string")
     */
    private $desc;

    /**
     * @JMS\SerializedName("remise_percent")
     * @JMS\Type("float")
     */
    private $remisePercent;

    /**
     * @JMS\SerializedName("date_start")
     * @JMS\Type("int")
     */
    private $dateStart;

    /**
     * @JMS\SerializedName("date_end")
     * @JMS\Type("int")
     */
    private $dateEnd;

    /**
     * @JMS\SerializedName("product_ref")
     * @JMS\Type("string")
     */
    private $productRef;

    /**
     * @JMS\SerializedName("product_label")
     * @JMS\Type("string")
     */
    private $productLabel;

    /**
     * @JMS\SerializedName("product_desc")
     * @JMS\Type("string")
     */
    private $productDesc;

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
     * @JMS\Type("int")
     */
    private $qty;

    /**
     * @JMS\Type("float")
     */
    private $subprice;

    /**
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param mixed $invoiceId
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getRemisePercent()
    {
        return $this->remisePercent;
    }

    /**
     * @param mixed $remisePercent
     */
    public function setRemisePercent($remisePercent)
    {
        $this->remisePercent = $remisePercent;
    }

    /**
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * @param mixed $dateStart
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * @param mixed $dateEnd
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
    }

    /**
     * @return mixed
     */
    public function getProductRef()
    {
        return $this->productRef;
    }

    /**
     * @param mixed $productRef
     */
    public function setProductRef($productRef)
    {
        $this->productRef = $productRef;
    }

    /**
     * @return mixed
     */
    public function getProductLabel()
    {
        return $this->productLabel;
    }

    /**
     * @param mixed $productLabel
     */
    public function setProductLabel($productLabel)
    {
        $this->productLabel = $productLabel;
    }

    /**
     * @return mixed
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }

    /**
     * @param mixed $productDesc
     */
    public function setProductDesc($productDesc)
    {
        $this->productDesc = $productDesc;
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
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * @param mixed $qty
     */
    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    /**
     * @return mixed
     */
    public function getSubprice()
    {
        return $this->subprice;
    }

    /**
     * @param mixed $subprice
     */
    public function setSubprice($subprice)
    {
        $this->subprice = $subprice;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
