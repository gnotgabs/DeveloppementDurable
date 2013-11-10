<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SubCategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SubCategoryRepository extends EntityRepository
{
    /**
     * Nous permet dans le controlleur de ne pas utiliser les méthodes "find et findAll" 
     * pour récupérer les menus. Nous pourront ainsi récupérer les menus et les entitités 
     * qui lui sont reliés (Article par exemple)
     * 
     * Ceci nous permet aussi de charger toutes les informations liées aux Sous catégories en une 
     * seule requête ce qui allège le code
     */
    public function getArticles(){
        $query = $this->createQueryBuilder('sc')
                      ->leftJoin('sc.articles', 'ar') // les sous menus des menus
                        ->addSelect('ar')
                      ->orderBy('c.id', 'ASC')
                      ->getQuery();

        return $query->getResult();
    }
}
