<?php

namespace Proxies\__CG__\UTBM\ArticleDevBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Category extends \UTBM\ArticleDevBundle\Entity\Category implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setLabelCategory($labelCategory)
    {
        $this->__load();
        return parent::setLabelCategory($labelCategory);
    }

    public function getLabelCategory()
    {
        $this->__load();
        return parent::getLabelCategory();
    }

    public function addSubCategorie(\UTBM\ArticleDevBundle\Entity\Category $subCategories)
    {
        $this->__load();
        return parent::addSubCategorie($subCategories);
    }

    public function removeSubCategorie(\UTBM\ArticleDevBundle\Entity\Category $subCategories)
    {
        $this->__load();
        return parent::removeSubCategorie($subCategories);
    }

    public function getSubCategories()
    {
        $this->__load();
        return parent::getSubCategories();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'labelCategory', 'subCategories');
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