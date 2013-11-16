<?php

namespace UTBM\ArticleDevBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleModifType extends ArticleType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        
        $builder->remove('date');
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTBM\ArticleDevBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     * 
     * RETOURNE L'ATTRIBUT "id" DES CHAMPS DU FORMULAIRE TELLE QU'ON AIT [ id="dev_LENOMDUCHAMP" ] 
     */
    public function getName()
    {
        return 'devModif';
    }
}
