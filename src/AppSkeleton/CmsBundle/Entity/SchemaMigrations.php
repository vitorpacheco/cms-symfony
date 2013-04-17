<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchemaMigrations
 *
 * @ORM\Table(name="schema_migrations")
 * @ORM\Entity
 */
class SchemaMigrations {
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="class", type="string", length=255, nullable=true)
	 */
	private $class;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="type", type="string", length=50, nullable=true)
	 */
	private $type;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="created", type="datetime", nullable=true)
	 */
	private $created;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set class
	 *
	 * @param string $class
	 * @return SchemaMigrations
	 */
	public function setClass($class) {
		$this->class = $class;

		return $this;
	}

	/**
	 * Get class
	 *
	 * @return string
	 */
	public function getClass() {
		return $this->class;
	}

	/**
	 * Set type
	 *
	 * @param string $type
	 * @return SchemaMigrations
	 */
	public function setType($type) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Get type
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return SchemaMigrations
	 */
	public function setCreated($created) {
		$this->created = $created;

		return $this;
	}

	/**
	 * Get created
	 *
	 * @return \DateTime
	 */
	public function getCreated() {
		return $this->created;
	}
}