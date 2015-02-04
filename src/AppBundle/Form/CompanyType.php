<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyType extends AbstractType
{
    const TOOLTIP_OPTIONAL_TAX_NUMBERS = "Only if required for this business";
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'Company Real Name:',
                'attr'=>array('maxlength' => 255)))
            ->add('initial', 'text', array('label'=> 'Corporation Type:',
                'required'=>false,
                'empty_data'=>null,
                'attr'=>array('maxlength' => 5)))
            ->add('lastName', 'text', array('label'=>'Commercial Name:',
                'attr'=>array('maxlength' => 255), 'required'=>false))
            ->add('email', 'email', array('label'=>'Main E-mail:'))
            ->add('residentialPhone', 'text', array('label'=>'Main Phone:','required'=>false))
            ->add('cellPhone', 'text', array('label'=>'Main Contact\'s Cellphone:', 'required' => false))
            ->add('address', new AddressType(), array('label'=>'Address Information:'))
            ->add('taxNumber', 'text', array('label'=> 'Country\'s Tax Payer Number', 'required' => true))
            ->add('stateRegistration', 'text', array('label' => 'Your state Tax Payer Number (If exists)',
                'required'=>false,
                'attr'=>array('tooltip'=>self::TOOLTIP_OPTIONAL_TAX_NUMBERS)
            ))
            ->add('cityRegistration','text', array('label' => 'Your city Tax Payer Number (If exists)',
        'required'=>false,
        'attr'=>array('tooltip'=>self::TOOLTIP_OPTIONAL_TAX_NUMBERS)
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Company'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'appbundle_company';
    }
}
