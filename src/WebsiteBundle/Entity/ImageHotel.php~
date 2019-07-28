<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageHotel
 *
 * @ORM\Table(name="image_hotel")
 * @ORM\Entity
 */
class ImageHotel
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimage_hotel", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimageHotel;

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
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idhotel", referencedColumnName="idhotel")
     * })
     */
    private $idhotel;

    /**
     * @return int
     */
    public function getIdimageHotel()
    {
        return $this->idimageHotel;
    }

    /**
     * @param int $idimageHotel
     */
    public function setIdimageHotel($idimageHotel)
    {
        $this->idimageHotel = $idimageHotel;
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
     * @return \Hotel
     */
    public function getIdhotel()
    {
        return $this->idhotel;
    }

    /**
     * @param \Hotel $idhotel
     */
    public function setIdhotel($idhotel)
    {
        $this->idhotel = $idhotel;
    }


}
