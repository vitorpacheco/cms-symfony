<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('slug')
            ->add('content')
            ->add('lft')
            ->add('rght')
            ->add('promote')
            ->add('published')
            ->add('statusComments')
            ->add('commentCount')
            ->add('created')
            ->add('updated')
            ->add('author')
            ->add('parent')
            ->add('type')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppSkeleton\CmsBundle\Entity\Posts'
        ));
    }

    public function getName()
    {
        return 'appskeleton_cmsbundle_poststype';
    }
}
