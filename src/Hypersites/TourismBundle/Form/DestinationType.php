<?php

namespace Hypersites\TourismBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DestinationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('region')
            ->add('country')
            ->add('description')
            ->add('mainPicture')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('evaluations')
            ->add('trips')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Hypersites\TourismBundle\Entity\Destination'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'hypersites_tourismbundle_destination';
    }
}
