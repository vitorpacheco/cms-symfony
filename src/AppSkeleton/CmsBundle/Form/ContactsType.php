<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('phone')
            ->add('mobile')
            ->add('email')
            ->add('skype')
            ->add('active')
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
            'data_class' => 'AppSkeleton\CmsBundle\Entity\Contacts'
        ));
    }

    public function getName()
    {
        return 'appskeleton_cmsbundle_contactstype';
    }
}
