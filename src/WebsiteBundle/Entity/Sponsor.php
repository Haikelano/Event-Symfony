<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sponsor
 *
 * @ORM\Table(name="sponsor")
 * @ORM\Entity
 */
class Sponsor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsponsor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsponsor;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->idsponsor;
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
     * @ORM\Column(name="website", type="string", length=45, nullable=true)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=45, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="contact", type="string", length=45, nullable=true)
     */
    private $contact;

    /**
     * @var \Event
     *
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idevent", referencedColumnName="idevent")
     * })
     */
    private $idevent;

    /**
     * @return int
     */
    public function getIdsponsor()
    {
        return $this->idsponsor;
    }

    /**
     * @param int $idsponsor
     */
    public function setIdsponsor($idsponsor)
    {
        $this->idsponsor = $idsponsor;
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
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param string $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param string $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return \Event
     */
    public function getIdevent()
    {
        return $this->idevent;
    }

    /**
     * @param \Event $idevent
     */
    public function setIdevent($idevent)
    {
        $this->idevent = $idevent;
    }


}
