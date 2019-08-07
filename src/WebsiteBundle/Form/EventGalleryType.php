<?php

namespace WebsiteBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventGalleryType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('location')
            ->add('name')
            ->add('description')
            ->add('pathimage')
            ->add('iamgePrincipal')
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
            'data_class' => 'WebsiteBundle\Entity\EventGallery'
        ));
    }
}
