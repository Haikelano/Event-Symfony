<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actuality
 *
 * @ORM\Table(name="actuality")
 * @ORM\Entity
 */
class Actuality
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idActuality", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactuality;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=200, nullable=true)
     */
    private $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreate", type="date", nullable=true)
     */
    private $datecreate;

    /**
     * @return int
     */
    public function getIdactuality()
    {
        return $this->idactuality;
    }

    /**
     * @param int $idactuality
     */
    public function setIdactuality($idactuality)
    {
        $this->idactuality = $idactuality;
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
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * @param string $resume
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    }

    /**
     * @return \DateTime
     */
    public function getDatecreate()
    {
        return $this->datecreate;
    }

    /**
     * @param \DateTime $datecreate
     */
    public function setDatecreate($datecreate)
    {
        $this->datecreate = $datecreate;
    }

}
