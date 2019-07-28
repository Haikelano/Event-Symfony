<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participant
 *
 * @ORM\Table(name="participant")
 * @ORM\Entity
 */
class Participant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idparticipant", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idparticipant;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->idparticipant;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=45, nullable=true)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=45, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=45, nullable=true)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=45, nullable=true)
     */
    private $zipcode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastconnexiondate", type="date", nullable=true)
     */
    private $lastconnexiondate;

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
    public function getIdparticipant()
    {
        return $this->idparticipant;
    }

    /**
     * @param int $idparticipant
     */
    public function setIdparticipant($idparticipant)
    {
        $this->idparticipant = $idparticipant;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return \DateTime
     */
    public function getLastconnexiondate()
    {
        return $this->lastconnexiondate;
    }

    /**
     * @param \DateTime $lastconnexiondate
     */
    public function setLastconnexiondate($lastconnexiondate)
    {
        $this->lastconnexiondate = $lastconnexiondate;
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
