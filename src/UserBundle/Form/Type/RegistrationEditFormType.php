<?php
/**
 * Created by PhpStorm.
 * User: Patrick
 * Date: 9/4/15
 * Time: 3:11 PM
 */

namespace UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class RegistrationEditFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName', 'text')
            ->add('firstName', 'text')
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('phone', 'text')
            ->add('amount', 'money')
            ->add('image',        ImageType::class, array(
                'required' => false,
                    'data_class' => null
                )
            )
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'lldcontribution_userbundle_registration_edit';
    }
} 