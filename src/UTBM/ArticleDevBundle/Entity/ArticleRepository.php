<?php

namespace UTBM\ArticleDevBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
    /**
     *  Récupère les articles appartenant au sous menus qu'on a sélectionné
     */
    public function getSubCategoryArticles($id){
        $query = $this->createQueryBuilder('ar')
                      ->leftJoin('ar.subCategory', 'sc')
                        ->addSelect('sc')
                      ->where("sc.id = :id")
                      ->setParameter('id', $id)
                      ->orderBy('ar.date', 'DESC')
                      ->getQuery();
        return $query->getResult();
    }
}
