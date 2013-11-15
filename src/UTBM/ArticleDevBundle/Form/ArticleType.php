<?php

namespace UTBM\ArticleDevBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',       'date', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('title',      'text', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('author',     'text', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('content',    'textarea', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('link',       'text', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('image',      'text', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('subCategory')
        ;
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
        return 'dev';
    }
}
