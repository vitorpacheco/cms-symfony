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
//            ->add('slug')
            ->add('content', 'textarea', array(
				'attr' => array(
					'class' => 'cleditor',
				)
			))
//            ->add('lft')
//            ->add('rght')
            ->add('promote')
            ->add('published')
            ->add('statusComments', 'checkbox', array(
				'required' => false,
				'label' => 'Comments',
			))
//            ->add('commentCount')
//            ->add('created')
//            ->add('updated')
            ->add('author', 'entity', array(
				'class' => 'AppSkeletonCmsBundle:Users',
				'property' => 'fullName',
				'empty_value' => 'Choose...'
			))
            ->add('parent', 'entity', array(
				'class' => 'AppSkeletonCmsBundle:Posts',
				'property' => 'title',
				'empty_value' => 'Choose...',
				'required' => false,
			))
            ->add('type', 'entity', array(
				'class' => 'AppSkeletonCmsBundle:Types',
				'property' => 'name',
				'empty_value' => 'Choose...'
			))
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
