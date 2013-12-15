<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * SubCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\SubCategoryRepository")
 */
class SubCategory
{
    /**
     *  UNE CATEGORIE PEUT CONTENIR PLUSIEURS SOUS CATEGORIES 
     *  LA VARIABLE "$category" VA NOUS PERMETTRE D'ACCEDER
     *  A LA CATEGORIE PARENTE DE LA SOUS CATEGORY
     *  GRACE A LA DECLARATION DE LA VARIABLE "$category" CI-DESSOUS, L'IDENTIFIANT 
     *  DE L'ENTITE VISEE (Category) MIGRE VERS LA TABLE "SubCategory"
     */
    
    /**
     * @ORM\ManyToOne(targetEntity="UTBM\ArticleDevBundle\Entity\Category", inversedBy="subCategories")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;
    
    /**
     * @ORM\OneToMany(targetEntity="UTBM\ArticleDevBundle\Entity\Article", mappedBy="subCategory", cascade={"remove"})
     */
    private $articles;
    
    /**
     * @ORM\OneToMany(targetEntity="UTBM\ArticleDevBundle\Entity\Question", mappedBy="subCategory", cascade={"remove"})
     */
    private $questions;
    
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
     * @ORM\Column(name="labelSubCategory", type="string", length=255)
     */
    private $labelSubCategory;

     /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new ArrayCollection();
        $this->questions = new ArrayCollection();
    }

     public function __toString()
    {
        return $this->getLabelSubCategory();
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
     * Set labelSubCategory
     *
     * @param string $labelSubCategory
     * @return SubCategory
     */
    public function setLabelSubCategory($labelSubCategory)
    {
        $this->labelSubCategory = $labelSubCategory;
    
        return $this;
    }

    /**
     * Get labelSubCategory
     *
     * @return string 
     */
    public function getLabelSubCategory()
    {
        return $this->labelSubCategory;
    }

    /**
     * Set category
     *
     * @param \UTBM\ArticleDevBundle\Entity\Category $category
     * @return SubCategory
     */
    public function setCategory(\UTBM\ArticleDevBundle\Entity\Category $category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return \UTBM\ArticleDevBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Add articles
     *
     * @param \UTBM\ArticleDevBundle\Entity\Article $articles
     * @return SubCategory
     */
    public function addArticle(\UTBM\ArticleDevBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;
    
        return $this;
    }

    /**
     * Remove articles
     *
     * @param \UTBM\ArticleDevBundle\Entity\Article $articles
     */
    public function removeArticle(\UTBM\ArticleDevBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Add questions
     *
     * @param \UTBM\ArticleDevBundle\Entity\Question $questions
     * @return SubCategory
     */
    public function addQuestion(\UTBM\ArticleDevBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;
    
        return $this;
    }

    /**
     * Remove questions
     *
     * @param \UTBM\ArticleDevBundle\Entity\Question $questions
     */
    public function removeQuestion(\UTBM\ArticleDevBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }
}