<?php

namespace UTBM\ArticleDevBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LMenuModifType extends LMenuType
{
            /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTBM\ArticleDevBundle\Entity\LMenu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lmenu';
    }
}
