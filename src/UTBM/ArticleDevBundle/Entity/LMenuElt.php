<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LMenuElt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UTBM\ArticleDevBundle\Entity\LMenuEltRepository")
 */
class LMenuElt
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
     * @ORM\Column(name="linkElt", type="string", length=255)
     */
    private $linkElt;

    /**
     * @var string
     *
     * @ORM\Column(name="labelElt", type="string", length=255)
     */
    private $labelElt;

    /**
    * @ORM\ManyToOne(targetEntity="UTBM\ArticleDevBundle\Entity\LMenu", inversedBy="lMenuElts")
    * @ORM\JoinColumn(nullable=false)
    */
    private $lmenu;

    public function __toString()
    {
       return $this->getLabelElt();
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
     * Set linkElt
     *
     * @param string $linkElt
     * @return LMenuElt
     */
    public function setLinkElt($linkElt)
    {
        $this->linkElt = $linkElt;
    
        return $this;
    }

    /**
     * Get linkElt
     *
     * @return string 
     */
    public function getLinkElt()
    {
        return $this->linkElt;
    }

    /**
     * Set labelElt
     *
     * @param string $labelElt
     * @return LMenuElt
     */
    public function setLabelElt($labelElt)
    {
        $this->labelElt = $labelElt;
    
        return $this;
    }

    /**
     * Get labelElt
     *
     * @return string 
     */
    public function getLabelElt()
    {
        return $this->labelElt;
    }

    /**
     * Set lmenu
     *
     * @param \UTBM\ArticleDevBundle\Entity\LMenu $lmenu
     * @return LMenuElt
     */
    public function setLmenu(\UTBM\ArticleDevBundle\Entity\LMenu $lmenu)
    {
        $this->lmenu = $lmenu;
    
        return $this;
    }

    /**
     * Get lmenu
     *
     * @return \UTBM\ArticleDevBundle\Entity\LMenu 
     */
    public function getLmenu()
    {
        return $this->lmenu;
    }
}