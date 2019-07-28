<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity
 */
class Tag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtag", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtag;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->idtag;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreate", type="date", nullable=true)
     */
    private $datecreate;

    /**
     * @var string
     *
     * @ORM\Column(name="linktag", type="string", length=100, nullable=true)
     */
    private $linktag;

    /**
     * @var \Actuality
     *
     * @ORM\ManyToOne(targetEntity="Actuality")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_actuality", referencedColumnName="idActuality")
     * })
     */
    private $idActuality;

    /**
     * @return int
     */
    public function getIdtag()
    {
        return $this->idtag;
    }

    /**
     * @param int $idtag
     */
    public function setIdtag($idtag)
    {
        $this->idtag = $idtag;
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

    /**
     * @return string
     */
    public function getLinktag()
    {
        return $this->linktag;
    }

    /**
     * @param string $linktag
     */
    public function setLinktag($linktag)
    {
        $this->linktag = $linktag;
    }

    /**
     * @return \Actuality
     */
    public function getIdActuality()
    {
        return $this->idActuality;
    }

    /**
     * @param \Actuality $idActuality
     */
    public function setIdActuality($idActuality)
    {
        $this->idActuality = $idActuality;
    }


}
