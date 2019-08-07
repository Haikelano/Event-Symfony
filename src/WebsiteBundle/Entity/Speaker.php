<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Speaker
 *
 * @ORM\Table(name="speaker")
 * @ORM\Entity
 */
class Speaker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idspeaker", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idspeaker;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->idspeaker;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;
    /**
     * @var boolean
     *
     * @ORM\Column(name="status", type="boolean", nullable=true)
     */
    private $status;

    /**
     * @return bool
     */
    public function isStatus()
    {
        return $this->status;
    }

    /**
     * @param bool $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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


    /**
     * @var string
     *
     * @ORM\Column(name="Lastname", type="string", length=45, nullable=true)
     */
    private $lastname;

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
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=45, nullable=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseFB", type="string", length=100, nullable=true)
     */
    private $adressefb;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseLI", type="string", length=100, nullable=true)
     */
    private $adresseli;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseTWI", type="string", length=100, nullable=true)
     */
    private $adressetwi;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseGO", type="string", length=100, nullable=true)
     */
    private $adressego;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=100, nullable=true)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="string", length=100, nullable=true)
     */
    private $abstract;

    /**
     * @return int
     */
    public function getIdspeaker()
    {
        return $this->idspeaker;
    }

    /**
     * @param int $idspeaker
     */
    public function setIdspeaker($idspeaker)
    {
        $this->idspeaker = $idspeaker;
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
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return string
     */
    public function getAdressefb()
    {
        return $this->adressefb;
    }

    /**
     * @param string $adressefb
     */
    public function setAdressefb($adressefb)
    {
        $this->adressefb = $adressefb;
    }

    /**
     * @return string
     */
    public function getAdresseli()
    {
        return $this->adresseli;
    }

    /**
     * @param string $adresseli
     */
    public function setAdresseli($adresseli)
    {
        $this->adresseli = $adresseli;
    }

    /**
     * @return string
     */
    public function getAdressetwi()
    {
        return $this->adressetwi;
    }

    /**
     * @param string $adressetwi
     */
    public function setAdressetwi($adressetwi)
    {
        $this->adressetwi = $adressetwi;
    }

    /**
     * @return string
     */
    public function getAdressego()
    {
        return $this->adressego;
    }

    /**
     * @param string $adressego
     */
    public function setAdressego($adressego)
    {
        $this->adressego = $adressego;
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
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param string $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return string
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param string $abstract
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }


}
