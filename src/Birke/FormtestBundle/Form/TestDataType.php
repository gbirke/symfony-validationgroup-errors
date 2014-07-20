<?php

namespace Birke\FormtestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
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
            ->add('vGroups', 'text', array('label' => 'Validation groups'))
            ->add('submit', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Birke\FormtestBundle\Entity\TestData',
            'validation_groups' => function(FormInterface $form) {
                $allowedGroups = array("Default", "one", "two");
                $data = $form->getData();
                $vGroupsString = $data->getVGroups();
                $vGroups = array_unique(preg_split("/\s*,\s*/", $vGroupsString));
                $vGroups = array_intersect($vGroups, $allowedGroups);
                if(!$vGroups) {
                    $vGroups = array('Default');
                }
                return $vGroups;
            },
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
