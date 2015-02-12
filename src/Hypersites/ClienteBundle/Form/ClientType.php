<?php

namespace Hypersites\ClienteBundle\Form;

use AppBundle\Form\FiscalPersonType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use AppBundle\Form\AddressType;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('person', new FiscalPersonType())
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
