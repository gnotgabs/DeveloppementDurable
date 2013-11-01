<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\CategoryRepository")
 */
class Category
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
     * @ORM\Column(name="labelCategory", type="string", length=255)
     */
    private $labelCategory;


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
}
