<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attachments
 *
 * @ORM\Table(name="attachments")
 * @ORM\Entity
 */
class Attachments {
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
	 * @ORM\Column(name="model", type="string", length=50, nullable=false)
	 */
	private $model;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="foreign_key", type="integer", nullable=false)
	 */
	private $foreignKey;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=40, nullable=true)
	 */
	private $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="attachment", type="string", length=255, nullable=false)
	 */
	private $attachment;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="dir", type="string", length=255, nullable=false)
	 */
	private $dir;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="type", type="string", length=255, nullable=false)
	 */
	private $type;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="size", type="integer", nullable=true)
	 */
	private $size;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="active", type="boolean", nullable=false)
	 */
	private $active;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set model
	 *
	 * @param string $model
	 * @return Attachments
	 */
	public function setModel($model) {
		$this->model = $model;

		return $this;
	}

	/**
	 * Get model
	 *
	 * @return string
	 */
	public function getModel() {
		return $this->model;
	}

	/**
	 * Set foreignKey
	 *
	 * @param integer $foreignKey
	 * @return Attachments
	 */
	public function setForeignKey($foreignKey) {
		$this->foreignKey = $foreignKey;

		return $this;
	}

	/**
	 * Get foreignKey
	 *
	 * @return integer
	 */
	public function getForeignKey() {
		return $this->foreignKey;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Attachments
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set attachment
	 *
	 * @param string $attachment
	 * @return Attachments
	 */
	public function setAttachment($attachment) {
		$this->attachment = $attachment;

		return $this;
	}

	/**
	 * Get attachment
	 *
	 * @return string
	 */
	public function getAttachment() {
		return $this->attachment;
	}

	/**
	 * Set dir
	 *
	 * @param string $dir
	 * @return Attachments
	 */
	public function setDir($dir) {
		$this->dir = $dir;

		return $this;
	}

	/**
	 * Get dir
	 *
	 * @return string
	 */
	public function getDir() {
		return $this->dir;
	}

	/**
	 * Set type
	 *
	 * @param string $type
	 * @return Attachments
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
	 * Set size
	 *
	 * @param integer $size
	 * @return Attachments
	 */
	public function setSize($size) {
		$this->size = $size;

		return $this;
	}

	/**
	 * Get size
	 *
	 * @return integer
	 */
	public function getSize() {
		return $this->size;
	}

	/**
	 * Set active
	 *
	 * @param boolean $active
	 * @return Attachments
	 */
	public function setActive($active) {
		$this->active = $active;

		return $this;
	}

	/**
	 * Get active
	 *
	 * @return boolean
	 */
	public function getActive() {
		return $this->active;
	}
}