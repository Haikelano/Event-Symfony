<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageSpeaker
 *
 * @ORM\Table(name="image_speaker")
 * @ORM\Entity
 */
class ImageSpeaker
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimage_speaker", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimageSpeaker;

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
     * @ORM\Column(name="image_principal", type="boolean", nullable=true)
     */
    private $imagePrincipal;

    /**
     * @var \Speaker
     *
     * @ORM\ManyToOne(targetEntity="Speaker")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_speaker", referencedColumnName="idspeaker")
     * })
     */
    private $idSpeaker;

    /**
     * @return int
     */
    public function getIdimageSpeaker()
    {
        return $this->idimageSpeaker;
    }

    /**
     * @param int $idimageSpeaker
     */
    public function setIdimageSpeaker($idimageSpeaker)
    {
        $this->idimageSpeaker = $idimageSpeaker;
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
    public function isImagePrincipal()
    {
        return $this->imagePrincipal;
    }

    /**
     * @param bool $imagePrincipal
     */
    public function setImagePrincipal($imagePrincipal)
    {
        $this->imagePrincipal = $imagePrincipal;
    }

    /**
     * @return \Speaker
     */
    public function getIdSpeaker()
    {
        return $this->idSpeaker;
    }

    /**
     * @param \Speaker $idSpeaker
     */
    public function setIdSpeaker($idSpeaker)
    {
        $this->idSpeaker = $idSpeaker;
    }


}
