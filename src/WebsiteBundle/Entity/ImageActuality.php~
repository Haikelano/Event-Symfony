<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageActuality
 *
 * @ORM\Table(name="image_actuality")
 * @ORM\Entity
 */
class ImageActuality
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimage_actuality", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimageActuality;

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
     * @var \Actuality
     *
     * @ORM\ManyToOne(targetEntity="Actuality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idactuality", referencedColumnName="idActuality")
     * })
     */
    private $idactuality;

    /**
     * @return int
     */
    public function getIdimageActuality()
    {
        return $this->idimageActuality;
    }

    /**
     * @param int $idimageActuality
     */
    public function setIdimageActuality($idimageActuality)
    {
        $this->idimageActuality = $idimageActuality;
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
     * @return \Actuality
     */
    public function getIdactuality()
    {
        return $this->idactuality;
    }

    /**
     * @param \Actuality $idactuality
     */
    public function setIdactuality($idactuality)
    {
        $this->idactuality = $idactuality;
    }


}
