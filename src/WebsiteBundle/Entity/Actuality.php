<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actuality
 *
 * @ORM\Table(name="actuality")
 * @ORM\Entity
 */
class Actuality
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idActuality", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactuality;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="resume", type="string", length=200, nullable=true)
     */
    private $resume;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecreate", type="date", nullable=true)
     */
    private $datecreate;


}
