<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageTopics
 *
 * @ORM\Table(name="image_topics")
 * @ORM\Entity(repositoryClass="WebsiteBundle\Repository\ImageTopicsRepository")
 */
class ImageTopics
{
    /**
     * @var int
     *
     * @ORM\Column(name="imagetopicsid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $imagetopicsid;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->imagetopicsid;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=400)
     */
    private $link;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getImagetopicsid()
    {
        return $this->imagetopicsid;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return ImageTopics
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @var \Topics
     *
     * @ORM\ManyToOne(targetEntity="Topics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="topicsid", referencedColumnName="topicsid")
     * })
     */
    private $topicsid;

    /**
     * @return \Topics
     */
    public function getTopicsid()
    {
        return $this->topicsid;
    }

    /**
     * @param \Topics $topicsid
     */
    public function setTopicsid($topicsid)
    {
        $this->topicsid = $topicsid;
    }

}
