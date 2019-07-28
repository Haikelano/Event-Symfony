<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventGallery
 *
 * @ORM\Table(name="event_gallery")
 * @ORM\Entity
 */
class EventGallery
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idevent_gallery", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideventGallery;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->ideventGallery;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="pathImage", type="string", length=100, nullable=true)
     */
    private $pathimage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="iamge_principal", type="boolean", nullable=true)
     */
    private $iamgePrincipal;

    /**
     * @var \Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Event", referencedColumnName="idevent")
     * })
     */
    private $idEvent;

    /**
     * @return int
     */
    public function getIdeventGallery()
    {
        return $this->ideventGallery;
    }

    /**
     * @param int $ideventGallery
     */
    public function setIdeventGallery($ideventGallery)
    {
        $this->ideventGallery = $ideventGallery;
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
    public function getPathimage()
    {
        return $this->pathimage;
    }

    /**
     * @param string $pathimage
     */
    public function setPathimage($pathimage)
    {
        $this->pathimage = $pathimage;
    }

    /**
     * @return bool
     */
    public function isIamgePrincipal()
    {
        return $this->iamgePrincipal;
    }

    /**
     * @param bool $iamgePrincipal
     */
    public function setIamgePrincipal($iamgePrincipal)
    {
        $this->iamgePrincipal = $iamgePrincipal;
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
