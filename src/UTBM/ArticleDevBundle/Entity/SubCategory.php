<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    * @ORM\ManyToOne(targetEntity="UTBM\ArticleDevBundle\Entity\Category")
    * @ORM\JoinColumn(nullable=true)
    */
    private $category;
    
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
}
