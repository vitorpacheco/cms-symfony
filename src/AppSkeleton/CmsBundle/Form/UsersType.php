<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('password')
            ->add('fullName')
            ->add('email')
            ->add('activationKey')
            ->add('created')
            ->add('updated')
            ->add('group')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppSkeleton\CmsBundle\Entity\Users'
        ));
    }

    public function getName()
    {
        return 'appskeleton_cmsbundle_userstype';
    }
}
