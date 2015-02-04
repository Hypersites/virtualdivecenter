<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PersonType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'First Name:',
                'attr'=>array('maxlength' => 255)))
            ->add('initial', 'text', array('label'=> 'Initials:',
                'required'=>false,
                'empty_data'=>null,
                'attr'=>array('maxlength' => 5)))
            ->add('lastName', 'text', array('label'=>'Last Name:',
                'attr'=>array('maxlength' => 255), 'required'=>false))
            ->add('email', 'email', array('label'=>'E-mail:'))
            ->add('residentialPhone', 'text', array('label'=>'Home Phone:','required'=>false))
            ->add('cellPhone', 'text', array('label'=>'Cellphone:', 'required' => false))
            ->add('address', new AddressType(), array('label'=>'Address Information:'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Person'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_person';
    }
}
