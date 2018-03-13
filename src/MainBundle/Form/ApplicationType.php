<?php

namespace MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ApplicationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('applied',   'checkbox')
            ->add('name',      'text')
            ->add('email',     'email')
            ->add('phone',     'text')
            ->add('occupation','text')
            ->add('country',   'country')
            ->add('message',   'textarea')
            ->add('image',     new ImageType())
            ->add('title',     'entity', array(
                'class'     => 'MainBundle:Title',
                'property'  => 'name',
                'multiple'  => false,
                'expanded'  => true
            ))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Application'
        ));
    }

    public function getName()
    {
        return 'mainbundle_application';
    }
}
