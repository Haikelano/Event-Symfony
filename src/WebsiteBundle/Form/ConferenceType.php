<?php

namespace WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ConferenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('text')
            ->add('job')
            ->add('company')
            ->add('context')
            ->add('startdate', 'date')
            ->add('finishdate', 'date')
            ->add('description')
            ->add('resume')
            ->add('topics')
            ->add('idEvent',EntityType::class,array(
                'class'=>'WebsiteBundle\Entity\Event',
                'choice_label'=>'nameevent',
                'expanded'=>false,
                'multiple'=>false
            ))
            ->add('idSpeaker',EntityType::class,array(
                'class'=>'WebsiteBundle\Entity\Speaker',
                'choice_label'=>'lastname',
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
            'data_class' => 'WebsiteBundle\Entity\Conference'
        ));
    }
}
