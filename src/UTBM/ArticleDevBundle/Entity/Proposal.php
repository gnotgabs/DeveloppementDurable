<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proposal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\ProposalRepository")
 */
class Proposal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pEntitled", type="string", length=255)
     */
    private $pEntitled;

    /**
     * @var integer
     *
     * @ORM\Column(name="answer", type="integer")
     */
    private $answer;
    
    /**
    * @ORM\ManyToOne(targetEntity="UTBM\ArticleDevBundle\Entity\Question", inversedBy="proposals")
    * @ORM\JoinColumn(nullable=false)
    */
    private $question;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pEntitled
     *
     * @param string $pEntitled
     * @return Proposal
     */
    public function setPEntitled($pEntitled)
    {
        $this->pEntitled = $pEntitled;
    
        return $this;
    }

    /**
     * Get pEntitled
     *
     * @return string 
     */
    public function getPEntitled()
    {
        return $this->pEntitled;
    }

    /**
     * Set answer
     *
     * @param integer $answer
     * @return Proposal
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;
    
        return $this;
    }

    /**
     * Get answer
     *
     * @return integer 
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set question
     *
     * @param \UTBM\ArticleDevBundle\Entity\Question $question
     * @return Proposal
     */
    public function setQuestion(\UTBM\ArticleDevBundle\Entity\Question $question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return \UTBM\ArticleDevBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}