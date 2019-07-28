<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idevent", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevent;

    /**
     * @var string
     *
     * @ORM\Column(name="nameevent", type="string", length=45, nullable=true)
     */
    private $nameevent;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=45, nullable=true)
     */
    private $lieu;

    /**
     * @var string
     *
     * @ORM\Column(name="datePeriode", type="string", length=45, nullable=true)
     */
    private $dateperiode;

    /**
     * @var integer
     *
     * @ORM\Column(name="idimageP", type="integer", nullable=false)
     */
    private $idimagep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="date", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="date", nullable=true)
     */
    private $enddate;

    /**
     * @var string
     *
     * @ORM\Column(name="mapsEvent", type="string", length=200, nullable=true)
     */
    private $mapsevent;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcountry", referencedColumnName="idcountry")
     * })
     */
    private $idcountry;

    /**
     * @return int
     */
    public function getIdevent()
    {
        return $this->idevent;
    }

    /**
     * @param int $idevent
     */
    public function setIdevent($idevent)
    {
        $this->idevent = $idevent;
    }

    /**
     * @return string
     */
    public function getNameevent()
    {
        return $this->nameevent;
    }

    /**
     * @param string $nameevent
     */
    public function setNameevent($nameevent)
    {
        $this->nameevent = $nameevent;
    }

    /**
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * @param string $lieu
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * @return string
     */
    public function getDateperiode()
    {
        return $this->dateperiode;
    }

    /**
     * @param string $dateperiode
     */
    public function setDateperiode($dateperiode)
    {
        $this->dateperiode = $dateperiode;
    }

    /**
     * @return int
     */
    public function getIdimagep()
    {
        return $this->idimagep;
    }

    /**
     * @param int $idimagep
     */
    public function setIdimagep($idimagep)
    {
        $this->idimagep = $idimagep;
    }

    /**
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * @param \DateTime $startdate
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;
    }

    /**
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * @param \DateTime $enddate
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;
    }

    /**
     * @return string
     */
    public function getMapsevent()
    {
        return $this->mapsevent;
    }

    /**
     * @param string $mapsevent
     */
    public function setMapsevent($mapsevent)
    {
        $this->mapsevent = $mapsevent;
    }

    /**
     * @return \Country
     */
    public function getIdcountry()
    {
        return $this->idcountry;
    }

    /**
     * @param \Country $idcountry
     */
    public function setIdcountry($idcountry)
    {
        $this->idcountry = $idcountry;
    }


}
