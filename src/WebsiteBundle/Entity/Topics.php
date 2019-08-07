<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Topics
 *
 * @ORM\Table(name="topics")
 * @ORM\Entity(repositoryClass="WebsiteBundle\Repository\TopicsRepository")
 */
class Topics
{
    /**
     * @var int
     *
     * @ORM\Column(name="topicsid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $topicsid;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->topicsid;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="shortdescription", type="string", length=500)
     */
    private $shortdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="longdescription", type="string", length=2000, nullable=true)
     */
    private $longdescription;


    /**
     * Get id
     *
     * @return integer
     */
    public function getTopicsid()
    {
        return $this->topicsid;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Topics
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set shortdescription
     *
     * @param string $shortdescription
     * @return Topics
     */
    public function setShortdescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;

        return $this;
    }

    /**
     * Get shortdescription
     *
     * @return string
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }

    /**
     * Set longdescription
     *
     * @param string $longdescription
     * @return Topics
     */
    public function setLongdescription($longdescription)
    {
        $this->longdescription = $longdescription;

        return $this;
    }

    /**
     * Get longdescription
     *
     * @return string
     */
    public function getLongdescription()
    {
        return $this->longdescription;
    }
}
