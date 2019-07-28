<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket")
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idticket;

    /**
     * @var string
     *
     * @ORM\Column(name="nameoffer", type="string", length=45, nullable=true)
     */
    private $nameoffer;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionoffer", type="string", length=45, nullable=true)
     */
    private $descriptionoffer;

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
    public function getIdticket()
    {
        return $this->idticket;
    }

    /**
     * @param int $idticket
     */
    public function setIdticket($idticket)
    {
        $this->idticket = $idticket;
    }

    /**
     * @return string
     */
    public function getNameoffer()
    {
        return $this->nameoffer;
    }

    /**
     * @param string $nameoffer
     */
    public function setNameoffer($nameoffer)
    {
        $this->nameoffer = $nameoffer;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDescriptionoffer()
    {
        return $this->descriptionoffer;
    }

    /**
     * @param string $descriptionoffer
     */
    public function setDescriptionoffer($descriptionoffer)
    {
        $this->descriptionoffer = $descriptionoffer;
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
