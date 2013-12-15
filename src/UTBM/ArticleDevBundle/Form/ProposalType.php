<?php

namespace UTBM\ArticleDevBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProposalType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('pEntitled', 'text', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('answer', 'integer', array(
                'label_attr'  =>  array('class'    =>  'formLabel'),
            ))
            ->add('question')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UTBM\ArticleDevBundle\Entity\Proposal'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'proposal';
    }
}
