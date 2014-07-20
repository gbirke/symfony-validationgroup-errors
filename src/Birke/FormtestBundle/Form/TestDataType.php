<?php

namespace Birke\FormtestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TestDataType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('defaultField')
            ->add('groupOneField')
            ->add('groupTwoField')
            ->add('vGroups')
            ->add('submit', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Birke\FormtestBundle\Entity\TestData'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'birke_formtestbundle_testdata';
    }
}
