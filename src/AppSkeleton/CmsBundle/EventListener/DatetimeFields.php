<?php

namespace AppSkeleton\CmsBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;

class DatetimeFields {

	/**
	 * @ORM\PrePersist
	 */
	public function prePersist(LifecycleEventArgs $args) {
		$entity = $args->getEntity();

//		$reflectionObject = new \ReflectionObject($entity);

//		if ($reflectionObject->hasMethod('setCreated')) {
			$now = new \DateTime('now', new \DateTimeZone('America/Bahia'));
			$entity->setCreated($now);
			$entity->setUpdated($now);
//		}
	}

	/**
	 * @ORM\PreUpdate
	 */
	public function preUpdate(LifecycleEventArgs $args) {
		$entity = $args->getEntity();

//		$reflectionObject = new \ReflectionObject($entity);

//		if ($reflectionObject->hasMethod('setUpdated')) {
			$entity->setUpdated(new \DateTime('now', new \DateTimeZone('America/Bahia')));
//		}
	}

	/**
	 * @ORM\PostUpdate
	 */
	public function postUpdate(LifecycleEventArgs $args) {
		var_dump($args);exit;
	}
}