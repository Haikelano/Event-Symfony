<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageCountry
 *
 * @ORM\Table(name="image_country")
 * @ORM\Entity
 */
class ImageCountry
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimage_country", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimageCountry;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->idimageCountry;
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
     * @ORM\Column(name="image_principal", type="boolean", nullable=true)
     */
    private $imagePrincipal;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcountry", referencedColumnName="idcountry")
     * })
     */
    private $idcountry;

    /**
     * @return int
     */
    public function getIdimageCountry()
    {
        return $this->idimageCountry;
    }

    /**
     * @param int $idimageCountry
     */
    public function setIdimageCountry($idimageCountry)
    {
        $this->idimageCountry = $idimageCountry;
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
     * @return \Country
     */
    public function getIdcountry()
    {
        return $this->idcountry;
    }

    /**
     * @param \Country $idcountry
     */
    public function setIdcountry($idcountry)
    {
        $this->idcountry = $idcountry;
    }


}
