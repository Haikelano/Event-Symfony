<?php

namespace WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class HotelType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('nbstars')
            ->add('description')
            ->add('distanceevent')
            ->add('linkhotel')
            ->add('idEvent',EntityType::class ,array(
        'class'=>'WebsiteBundle\Entity\Event',
        'choice_label'=>'nameevent',
        'expanded'=>false,
        'multiple'=>false
    ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WebsiteBundle\Entity\Hotel'
        ));
    }
}
