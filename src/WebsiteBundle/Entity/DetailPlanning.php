<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetailPlanning
 *
 * @ORM\Table(name="detail_planning")
 * @ORM\Entity
 */
class DetailPlanning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddetail_planning", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetailPlanning;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->iddetailPlanning;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=45, nullable=true)
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="topic", type="string", length=45, nullable=true)
     */
    private $topic;

    /**
     * @var \Conference
     *
     * @ORM\ManyToOne(targetEntity="Conference")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_confernce", referencedColumnName="idconference")
     * })
     */
    private $idConfernce;

    /**
     * @var \Planning
     *
     * @ORM\ManyToOne(targetEntity="Planning")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_planning", referencedColumnName="idPlanning")
     * })
     */
    private $idPlanning;

    /**
     * @var \Speaker
     *
     * @ORM\ManyToOne(targetEntity="Speaker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idspeaker", referencedColumnName="idspeaker")
     * })
     */
    private $idspeaker;

    /**
     * @return int
     */
    public function getIddetailPlanning()
    {
        return $this->iddetailPlanning;
    }

    /**
     * @param int $iddetailPlanning
     */
    public function setIddetailPlanning($iddetailPlanning)
    {
        $this->iddetailPlanning = $iddetailPlanning;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * @param string $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
    }

    /**
     * @return \Conference
     */
    public function getIdConfernce()
    {
        return $this->idConfernce;
    }

    /**
     * @param \Conference $idConfernce
     */
    public function setIdConfernce($idConfernce)
    {
        $this->idConfernce = $idConfernce;
    }

    /**
     * @return \Planning
     */
    public function getIdPlanning()
    {
        return $this->idPlanning;
    }

    /**
     * @param \Planning $idPlanning
     */
    public function setIdPlanning($idPlanning)
    {
        $this->idPlanning = $idPlanning;
    }

    /**
     * @return \Speaker
     */
    public function getIdspeaker()
    {
        return $this->idspeaker;
    }

    /**
     * @param \Speaker $idspeaker
     */
    public function setIdspeaker($idspeaker)
    {
        $this->idspeaker = $idspeaker;
    }


}
