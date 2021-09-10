<?php


namespace Dolibarr\Client\Domain\Interventions;


use JMS\Serializer\Annotation as JMS;

/**
 * @author Rodolphe Veniel <rodolphe.veniel@gmail.com>
 */
class InterventionLine
{
    /**
     * @JMS\SerializedName("fk_fichinter")
     * @JMS\Type("int")
     */
    private $interventionId;

    /**
     * @JMS\Type("string")
     */
    private $desc;

    /**
     * @JMS\Type("int")
     */
    private $datei;

    /**
     * @JMS\Type("int")
     */
    private $duration;

    /**
     * @return mixed
     */
    public function getInterventionId()
    {
        return $this->interventionId;
    }

    /**
     * @param mixed $interventionId
     */
    public function setInterventionId($interventionId)
    {
        $this->interventionId = $interventionId;
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
    public function getDatei()
    {
        return $this->datei;
    }

    /**
     * @param mixed $datei
     */
    public function setDatei($datei)
    {
        $this->datei = $datei;
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
}
