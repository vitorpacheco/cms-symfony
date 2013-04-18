<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategoriesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('parentId', 'entity', array(
				'class' => 'AppSkeletonCmsBundle:Categories',
				'property' => 'name',
				'empty_value' => 'Choose...',
				'required' => false,
			))
            ->add('created')
            ->add('updated')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppSkeleton\CmsBundle\Entity\Categories'
        ));
    }

    public function getName()
    {
        return 'appskeleton_cmsbundle_categoriestype';
    }
}
