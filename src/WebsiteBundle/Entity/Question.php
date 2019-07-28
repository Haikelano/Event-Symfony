<?php

namespace WebsiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idquestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;
    /**
     * @return int
     */
    public function getId()
    {
        return $this->idquestion;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="text_question", type="string", length=200, nullable=true)
     */
    private $textQuestion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdate", type="date", nullable=true)
     */
    private $createdate;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="text_response", type="string", length=1000, nullable=true)
     */
    private $textResponse;

    /**
     * @return int
     */
    public function getIdquestion()
    {
        return $this->idquestion;
    }

    /**
     * @param int $idquestion
     */
    public function setIdquestion($idquestion)
    {
        $this->idquestion = $idquestion;
    }

    /**
     * @return string
     */
    public function getTextQuestion()
    {
        return $this->textQuestion;
    }

    /**
     * @param string $textQuestion
     */
    public function setTextQuestion($textQuestion)
    {
        $this->textQuestion = $textQuestion;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }

    /**
     * @param \DateTime $createdate
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getTextResponse()
    {
        return $this->textResponse;
    }

    /**
     * @param string $textResponse
     */
    public function setTextResponse($textResponse)
    {
        $this->textResponse = $textResponse;
    }


}
