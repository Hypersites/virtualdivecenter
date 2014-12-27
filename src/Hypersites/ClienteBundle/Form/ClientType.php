<?php

namespace Hypersites\ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Hypersites\ClienteBundle\Form\AddressType;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName','text', array(
                'required' => true,
                'label' => 'First Name:',
                'attr' => array(
                    'id' => 'client_first_name_field',
                ),
                'label_attr' => array(
                 'id' => 'client_first_name_label'
                    ),
                ))
            ->add('lastName', 'text', array(
                    'required' => true,
                    'label' => 'Last Name:',
                    'attr' => array(
                    'id' => 'client_last_name_field',
                ),
                'label_attr' => array(
                 'id' => 'client_last_name_label'),
                
                ))
            ->add('birthday', 'birthday', array(
                'widget'=>'single_text',
                'label' => 'Birthday:',
                'attr' => array(
                    'id' => 'client_birthday_field',
                ),
                'label_attr' => array(
                 'id' => 'client_birthday_label'),
                'format'=>'yyyy-MM-dd', 
                'required'=>true,))
            ->add('fiscaldocument', 'text', array( 'label' => 'Fiscal Document:',
                'attr' => array(
                    'id' => 'client_fiscal_document_field',
                ),
                'label_attr' => array(
                 'id' => 'client_fiscal_document_label'),
                'required' => true))
            ->add('telephone', 'text', array( 'label' => 'Telephone:',
                'attr' => array(
                    'id' => 'client_telephone_field',
                ),
                'label_attr' => array(
                 'id' => 'client_telephone_label'),
                'required' => false) )
            ->add('cellphone', 'text', array( 'label' => 'Mobile Phone:',
                'attr' => array(
                    'id' => 'client_cellphone_field',
                ),
                'label_attr' => array(
                 'id' => 'client_cellphone_label'),
                'required' => true))
            ->add('email','email', array( 'label' => 'E-mail:',
                'attr' => array(
                    'id' => 'client_email_field',
                ),
                'label_attr' => array(
                 'id' => 'client_email_label'),
                'required'=>true))
            ->add('address', 'collection', array('type'=>new AddressType()));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hypersites\ClienteBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hypersites_clientebundle_client';
    }
}
