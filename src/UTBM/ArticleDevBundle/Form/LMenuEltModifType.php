<?php

namespace UTBM\ArticleDevBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LMenuEltModifType extends LMenuEltType
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
            'data_class' => 'UTBM\ArticleDevBundle\Entity\LMenuElt'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lmenuelt';
    }
}
