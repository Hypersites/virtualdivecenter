<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddressType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('address1', 'text', array('required' => true))
            ->add('address2', 'text', array('required' => false))
            ->add('city', 'text', array('required' => true))
            ->add('state', 'text', array('required' => true))
            ->add('country', 'text', array('required' => true, 'data'=>'Brasil'))
            ->add('zip', 'text', array('required' => true))
            ->add('reference', 'textarea', array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hypersites\ClienteBundle\Entity\Address'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hypersites_clientebundle_address';
    }
}
