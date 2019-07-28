<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Newsletter
 *
 * @ORM\Table(name="newsletter")
 * @ORM\Entity
 */
class Newsletter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnewsletter", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnewsletter;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="istreated", type="boolean", nullable=true)
     */
    private $istreated;

    /**
     * @return int
     */
    public function getIdnewsletter()
    {
        return $this->idnewsletter;
    }

    /**
     * @param int $idnewsletter
     */
    public function setIdnewsletter($idnewsletter)
    {
        $this->idnewsletter = $idnewsletter;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isIstreated()
    {
        return $this->istreated;
    }

    /**
     * @param bool $istreated
     */
    public function setIstreated($istreated)
    {
        $this->istreated = $istreated;
    }


}
