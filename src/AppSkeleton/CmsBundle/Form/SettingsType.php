<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('key')
            ->add('value')
            ->add('title')
            ->add('description')
            ->add('inputType')
            ->add('editable')
            ->add('params')
            ->add('updated')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppSkeleton\CmsBundle\Entity\Settings'
        ));
    }

    public function getName()
    {
        return 'appskeleton_cmsbundle_settingstype';
    }
}
