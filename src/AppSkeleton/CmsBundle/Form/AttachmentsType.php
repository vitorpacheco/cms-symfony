<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AttachmentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('model')
            ->add('foreignKey')
            ->add('name')
            ->add('attachment')
            ->add('dir')
            ->add('type')
            ->add('size')
            ->add('active')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppSkeleton\CmsBundle\Entity\Attachments'
        ));
    }

    public function getName()
    {
        return 'appskeleton_cmsbundle_attachmentstype';
    }
}
