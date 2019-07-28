<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conference
 *
 * @ORM\Table(name="conference")
 * @ORM\Entity
 */
class Conference
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idconference", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconference;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=250, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=250, nullable=true)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=45, nullable=true)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=45, nullable=true)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=250, nullable=true)
     */
    private $context;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="date", nullable=true)
     */
    private $startdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finishdate", type="date", nullable=true)
     */
    private $finishdate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=1000, nullable=true)
     */
    private $resume;

    /**
     * @var string
     *
     * @ORM\Column(name="topics", type="string", length=255, nullable=true)
     */
    private $topics;

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
    public function getIdconference()
    {
        return $this->idconference;
    }

    /**
     * @param int $idconference
     */
    public function setIdconference($idconference)
    {
        $this->idconference = $idconference;
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
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param string $job
     */
    public function setJob($job)
    {
        $this->job = $job;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param string $context
     */
    public function setContext($context)
    {
        $this->context = $context;
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
    public function getFinishdate()
    {
        return $this->finishdate;
    }

    /**
     * @param \DateTime $finishdate
     */
    public function setFinishdate($finishdate)
    {
        $this->finishdate = $finishdate;
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
     * @return string
     */
    public function getTopics()
    {
        return $this->topics;
    }

    /**
     * @param string $topics
     */
    public function setTopics($topics)
    {
        $this->topics = $topics;
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
