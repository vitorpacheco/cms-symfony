<?php

namespace AppSkeleton\CmsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder
			->add('login')
			->add('password', 'repeated', array(
				'type' => 'password',
				'invalid_message' => 'The password fields must match.',
				'required' => true,
				'first_options' => array('label' => 'Password'),
				'second_options' => array('label' => 'Repeat Password'),
			))
			->add('fullName')
			->add('email')
			->add('activationKey')
//            ->add('created')
//            ->add('updated')
			->add('group', 'entity', array(
				'class' => 'AppSkeletonCmsBundle:Groups',
				'property' => 'name',
			))
		;
	}

	public function setDefaultOptions(OptionsResolverInterface $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'AppSkeleton\CmsBundle\Entity\Users'
		));
	}

	public function getName() {
		return 'appskeleton_cmsbundle_userstype';
	}

}
