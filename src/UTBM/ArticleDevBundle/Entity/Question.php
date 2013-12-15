<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="entitled", type="string", length=255)
     */
    private $entitled;
    
    /**
    * @ORM\ManyToOne(targetEntity="UTBM\ArticleDevBundle\Entity\SubCategory", inversedBy="questions")
    * @ORM\JoinColumn(nullable=false)
    */
    private $subCategory;

    /**
     * @ORM\OneToMany(targetEntity="UTBM\ArticleDevBundle\Entity\Proposal", mappedBy="question", cascade={"remove"})
     */
    private $proposals;
    
    // POUR EVITER L'ERREUR =====> A "__toString()" method was not found on the objects of type
    public function __toString()
    {
        return $this->getEntitled();
    }
    
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
     * Set entitled
     *
     * @param string $entitled
     * @return Question
     */
    public function setEntitled($entitled)
    {
        $this->entitled = $entitled;
    
        return $this;
    }

    /**
     * Get entitled
     *
     * @return string 
     */
    public function getEntitled()
    {
        return $this->entitled;
    }

    /**
     * Set subCategory
     *
     * @param \UTBM\ArticleDevBundle\Entity\SubCategory $subCategory
     * @return Question
     */
    public function setSubCategory(\UTBM\ArticleDevBundle\Entity\SubCategory $subCategory)
    {
        $this->subCategory = $subCategory;
    
        return $this;
    }

    /**
     * Get subCategory
     *
     * @return \UTBM\ArticleDevBundle\Entity\SubCategory 
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proposals = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add proposals
     *
     * @param \UTBM\ArticleDevBundle\Entity\Proposal $proposals
     * @return Question
     */
    public function addProposal(\UTBM\ArticleDevBundle\Entity\Proposal $proposals)
    {
        $this->proposals[] = $proposals;
    
        return $this;
    }

    /**
     * Remove proposals
     *
     * @param \UTBM\ArticleDevBundle\Entity\Proposal $proposals
     */
    public function removeProposal(\UTBM\ArticleDevBundle\Entity\Proposal $proposals)
    {
        $this->proposals->removeElement($proposals);
    }

    /**
     * Get proposals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProposals()
    {
        return $this->proposals;
    }
}