<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\CategoryRepository")
 */
class Category
{
    /**
     *
     * @ORM\oneToMany(targetEntity="UTBM\ArticleDevBundle\Entity\SubCategory", mappedBy="category", cascade={"remove"})
     */
    private $subCategories;
    
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
     * @ORM\Column(name="labelCategory", type="string", length=255)
     */
    private $labelCategory;

    public function __construct()
    {
        $this->subCategories = new ArrayCollection();
    }
    
    // POUR EVITER L'ERREUR =====> A "__toString()" method was not found on the objects of type
    public function __toString()
    {
        return $this->getLabelCategory();
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
     * Set labelCategory
     *
     * @param string $labelCategory
     * @return Category
     */
    public function setLabelCategory($labelCategory)
    {
        $this->labelCategory = $labelCategory;
    
        return $this;
    }

    /**
     * Get labelCategory
     *
     * @return string 
     */
    public function getLabelCategory()
    {
        return $this->labelCategory;
    }

    /**
     * Add subCategories
     *
     * @param \UTBM\ArticleDevBundle\Entity\Category $subCategories
     * @return Category
     */
    public function addSubCategorie(\UTBM\ArticleDevBundle\Entity\Category $subCategories)
    {
        $this->subCategories[] = $subCategories;
    
        return $this;
    }

    /**
     * Remove subCategories
     *
     * @param \UTBM\ArticleDevBundle\Entity\Category $subCategories
     */
    public function removeSubCategorie(\UTBM\ArticleDevBundle\Entity\Category $subCategories)
    {
        $this->subCategories->removeElement($subCategories);
    }

    /**
     * Get subCategories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubCategories()
    {
        return $this->subCategories;
    }
}