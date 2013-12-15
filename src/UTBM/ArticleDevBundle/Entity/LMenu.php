<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LMenu
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\LMenuRepository")
 */
class LMenu
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    
    /**
     * @ORM\OneToMany(targetEntity="UTBM\ArticleDevBundle\Entity\LMenuElt", mappedBy="lmenu", cascade={"remove"})
     */
    private $lMenuElts;
    
    
    public function __toString()
    {
       return $this->getTitle();
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
     * Set title
     *
     * @param string $title
     * @return LMenu
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
     * Constructor
     */
    public function __construct()
    {
        $this->lMenuElts = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add lMenuElts
     *
     * @param \UTBM\ArticleDevBundle\Entity\LMenuElt $lMenuElts
     * @return LMenu
     */
    public function addLMenuElt(\UTBM\ArticleDevBundle\Entity\LMenuElt $lMenuElts)
    {
        $this->lMenuElts[] = $lMenuElts;
    
        return $this;
    }

    /**
     * Remove lMenuElts
     *
     * @param \UTBM\ArticleDevBundle\Entity\LMenuElt $lMenuElts
     */
    public function removeLMenuElt(\UTBM\ArticleDevBundle\Entity\LMenuElt $lMenuElts)
    {
        $this->lMenuElts->removeElement($lMenuElts);
    }

    /**
     * Get lMenuElts
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLMenuElts()
    {
        return $this->lMenuElts;
    }
}