<?php


namespace Dolibarr\Client\Domain\Interventions;


/**
 * @author Rodolphe Veniel <rodolphe.veniel@gmail.com>
 */
class Intervention
{
    /**
     * @JMS\SerializedName("socid")
     * @JMS\Type("int")
     */
    private $thirdpartyId;

    /**
     * @JMS\Type("int")
     */
    private $datec;

    /**
     * @JMS\Type("int")
     */
    private $datev;

    /**
     * @JMS\Type("int")
     */
    private $dateo;

    /**
     * @JMS\Type("int")
     */
    private $datee;

    /**
     * @JMS\Type("int")
     */
    private $datet;

    /**
     * @JMS\Type("int")
     */
    private $datem;

    /**
     * @JMS\Type("int")
     */
    private $duration;

    /**
     * @JMS\Type("string")
     */
    private $description;

    /**
     * @JMS\Type("int")
     */
    private $id;

    /**
     * @JMS\Type("array")
     */
    private $extraparams;

    /**
     * @JMS\Type("string")
     */
    private $ref;

    /**
     * @JMS\Type("int")
     */
    private $brouillon;

    /**
     * @JMS\Type("int")
     */
    private $status;


    /**
     * @JMS\Type("int")
     */
    private $statut;

    /**
     * @JMS\Type("array<Dolibarr\Client\Domain\Interventions\InterventionLine>")
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
    public function getDatec()
    {
        return $this->datec;
    }

    /**
     * @param mixed $datec
     */
    public function setDatec($datec)
    {
        $this->datec = $datec;
    }

    /**
     * @return mixed
     */
    public function getDatev()
    {
        return $this->datev;
    }

    /**
     * @param mixed $datev
     */
    public function setDatev($datev)
    {
        $this->datev = $datev;
    }

    /**
     * @return mixed
     */
    public function getDateo()
    {
        return $this->dateo;
    }

    /**
     * @param mixed $dateo
     */
    public function setDateo($dateo)
    {
        $this->dateo = $dateo;
    }

    /**
     * @return mixed
     */
    public function getDatee()
    {
        return $this->datee;
    }

    /**
     * @param mixed $datee
     */
    public function setDatee($datee)
    {
        $this->datee = $datee;
    }

    /**
     * @return mixed
     */
    public function getDatet()
    {
        return $this->datet;
    }

    /**
     * @param mixed $datet
     */
    public function setDatet($datet)
    {
        $this->datet = $datet;
    }

    /**
     * @return mixed
     */
    public function getDatem()
    {
        return $this->datem;
    }

    /**
     * @param mixed $datem
     */
    public function setDatem($datem)
    {
        $this->datem = $datem;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
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
    public function getExtraparams()
    {
        return $this->extraparams;
    }

    /**
     * @param mixed $extraparams
     */
    public function setExtraparams($extraparams)
    {
        $this->extraparams = $extraparams;
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
    public function getBrouillon()
    {
        return $this->brouillon;
    }

    /**
     * @param mixed $brouillon
     */
    public function setBrouillon($brouillon)
    {
        $this->brouillon = $brouillon;
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
    public function getLines()
    {
        return $this->lines;
    }

    /**
     * @param mixed $lines
     */
    public function setLines($lines)
    {
        $this->lines = $lines;
    }
}
