<?php

namespace MainBundle\Form;

use MainBundle\Repository\ContactRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ApplicationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',     'text')
            ->add('message',  'textarea')
            ->add('phone',    'text')
            ->add('email',    'email')
            ->add('applied',  'checkbox')
            ->add('image',    new ImageType())
            ->add('country',    'country')
            ->add('occupation',    'text')
            ->add('title', 'collection', array(
                'type'         => new TitleType(),
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('save',     'submit')
        ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'main_contact';
    }
}
