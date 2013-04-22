<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LinksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url')
            ->add('name')
            ->add('image')
            ->add('description')
            ->add('visible')
//            ->add('created')
//            ->add('updated')
            ->add('owner', 'entity', array(
				'class' => 'AppSkeletonCmsBundle:Users',
				'property' => 'fullName',
				'empty_value' => 'Choose...'
			))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppSkeleton\CmsBundle\Entity\Links'
        ));
    }

    public function getName()
    {
        return 'appskeleton_cmsbundle_linkstype';
    }
}
