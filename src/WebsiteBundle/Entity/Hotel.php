<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhotel;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbstars", type="integer", nullable=true)
     */
    private $nbstars;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="distanceEvent", type="string", length=100, nullable=true)
     */
    private $distanceevent;

    /**
     * @var string
     *
     * @ORM\Column(name="linkhotel", type="string", length=100, nullable=true)
     */
    private $linkhotel;

    /**
     * @var \Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_event", referencedColumnName="idevent")
     * })
     */
    private $idEvent;

    /**
     * @return int
     */
    public function getIdhotel()
    {
        return $this->idhotel;
    }

    /**
     * @param int $idhotel
     */
    public function setIdhotel($idhotel)
    {
        $this->idhotel = $idhotel;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNbstars()
    {
        return $this->nbstars;
    }

    /**
     * @param int $nbstars
     */
    public function setNbstars($nbstars)
    {
        $this->nbstars = $nbstars;
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
    public function getDistanceevent()
    {
        return $this->distanceevent;
    }

    /**
     * @param string $distanceevent
     */
    public function setDistanceevent($distanceevent)
    {
        $this->distanceevent = $distanceevent;
    }

    /**
     * @return string
     */
    public function getLinkhotel()
    {
        return $this->linkhotel;
    }

    /**
     * @param string $linkhotel
     */
    public function setLinkhotel($linkhotel)
    {
        $this->linkhotel = $linkhotel;
    }

    /**
     * @return \Event
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }

    /**
     * @param \Event $idEvent
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
    }


}
