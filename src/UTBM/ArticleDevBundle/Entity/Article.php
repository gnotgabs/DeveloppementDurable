<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\ArticleRepository")
 */
class Article
{
    /**
     *  UNE SOUS-CATEGORIE PEUT CONTENIR PLUSIEURS ARTICLES 
     *  LA VARIABLE "$subCategory" VA NOUS PERMETTRE D'ACCEDER
     *  A LA SOUS-CATEGORIE PARENTE DE L'ARTICLE "nullable=false" => Aucun article sans sous-catégorie
     *  GRACE A LA DECLARATION DE LA VARIABLE "$subCategory" CI-DESSOUS, L'IDENTIFIANT 
     *  DE L'ENTITE VISEE (SubCategory) MIGRE VERS LA TABLE "Article"
     */
    
    /**
    * @ORM\ManyToOne(targetEntity="UTBM\ArticleDevBundle\Entity\SubCategory", inversedBy="articles")
    * @ORM\JoinColumn(nullable=false)
    */
    private $subCategory;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=100)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=50)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;
    
    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

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
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set subCategory
     *
     * @param \UTBM\ArticleDevBundle\Entity\SubCategory $subCategory
     * @return Article
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
     * Set link
     *
     * @param string $link
     * @return Article
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
}