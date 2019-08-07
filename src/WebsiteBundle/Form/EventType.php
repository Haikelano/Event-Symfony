<?php

namespace WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class EventType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameevent')
            ->add('lieu')
            ->add('dateperiode')
            ->add('startdate', 'date')
            ->add('enddate', 'date')
            ->add('mapsevent')
            ->add('title')
            ->add('description')
           ->add('idcountry',EntityType::class,array(
        'class'=>'WebsiteBundle\Entity\Country',
        'choice_label'=>'name',
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
            'data_class' => 'WebsiteBundle\Entity\Event'
        ));
    }
}
