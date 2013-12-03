<?php

namespace Proxies\__CG__\UTBM\ArticleDevBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class SubCategory extends \UTBM\ArticleDevBundle\Entity\SubCategory implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLabelSubCategory($labelSubCategory)
    {
        $this->__load();
        return parent::setLabelSubCategory($labelSubCategory);
    }

    public function getLabelSubCategory()
    {
        $this->__load();
        return parent::getLabelSubCategory();
    }

    public function setCategory(\UTBM\ArticleDevBundle\Entity\Category $category)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function addArticle(\UTBM\ArticleDevBundle\Entity\Article $articles)
    {
        $this->__load();
        return parent::addArticle($articles);
    }

    public function removeArticle(\UTBM\ArticleDevBundle\Entity\Article $articles)
    {
        $this->__load();
        return parent::removeArticle($articles);
    }

    public function getArticles()
    {
        $this->__load();
        return parent::getArticles();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'labelSubCategory', 'category', 'articles');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}