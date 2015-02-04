<?php

namespace Hypersites\Commercial\SupplierBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SupplierType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'required'=>true,
                'label' => 'Name or Company Name'
            ))
            ->add('website', 'text', array('required'=>false, 'label'=>'Website'))
            ->add('description', 'textarea', array('required'=>false, 'label' => 'Description'))
            ->add('logo', 'file', array('required'=>false))
            ->add('kindPerson', 'choice', array(
                    'expanded'=>true, 
                    'multiple'=>false,
                    'choices' => array('person' => 'Pessoa', 'company'=>'Company')
                    )
                )
            ->add('fiscalDocument','text', array('label'=> 'Fiscal Document'))
            ->add('active', 'choice', array(
                    'expanded'=>true,
                    'multiple'=>false,
                    'choices' => array(0=>'Inactive', 1=>'Active'),
                    'preferred_choices' => array(1),
                ))
            ->add('address','collection', array('type'=>new \Hypersites\ClienteBundle\Form\AddressType()))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hypersites\Commercial\SupplierBundle\Entity\Supplier'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hypersites_commercial_supplierbundle_supplier';
    }
}
