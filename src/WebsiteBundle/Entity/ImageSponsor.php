<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageSponsor
 *
 * @ORM\Table(name="image_sponsor")
 * @ORM\Entity
 */
class ImageSponsor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimage_sponsor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimageSponsor;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->idimageSponsor;
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
     * @ORM\Column(name="link", type="string", length=45, nullable=true)
     */
    private $link;

    /**
     * @var boolean
     *
     * @ORM\Column(name="image_princiapl", type="boolean", nullable=true)
     */
    private $imagePrinciapl;

    /**
     * @var \Sponsor
     *
     * @ORM\ManyToOne(targetEntity="Sponsor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsponsor", referencedColumnName="idsponsor")
     * })
     */
    private $idsponsor;

    /**
     * @return int
     */
    public function getIdimageSponsor()
    {
        return $this->idimageSponsor;
    }

    /**
     * @param int $idimageSponsor
     */
    public function setIdimageSponsor($idimageSponsor)
    {
        $this->idimageSponsor = $idimageSponsor;
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
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return bool
     */
    public function isImagePrinciapl()
    {
        return $this->imagePrinciapl;
    }

    /**
     * @param bool $imagePrinciapl
     */
    public function setImagePrinciapl($imagePrinciapl)
    {
        $this->imagePrinciapl = $imagePrinciapl;
    }

    /**
     * @return \Sponsor
     */
    public function getIdsponsor()
    {
        return $this->idsponsor;
    }

    /**
     * @param \Sponsor $idsponsor
     */
    public function setIdsponsor($idsponsor)
    {
        $this->idsponsor = $idsponsor;
    }


}
