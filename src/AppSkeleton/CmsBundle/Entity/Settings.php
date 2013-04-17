<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Settings
 *
 * @ORM\Table(name="settings")
 * @ORM\Entity
 */
class Settings {
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
	 * @ORM\Column(name="key", type="string", length=80, nullable=false)
	 */
	private $key;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="value", type="text", nullable=false)
	 */
	private $value;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="title", type="string", length=200, nullable=false)
	 */
	private $title;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="text", nullable=true)
	 */
	private $description;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="input_type", type="string", length=255, nullable=false)
	 */
	private $inputType;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="editable", type="boolean", nullable=false)
	 */
	private $editable;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="params", type="text", nullable=true)
	 */
	private $params;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="updated", type="datetime", nullable=false)
	 */
	private $updated;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set key
	 *
	 * @param string $key
	 * @return Settings
	 */
	public function setKey($key) {
		$this->key = $key;

		return $this;
	}

	/**
	 * Get key
	 *
	 * @return string
	 */
	public function getKey() {
		return $this->key;
	}

	/**
	 * Set value
	 *
	 * @param string $value
	 * @return Settings
	 */
	public function setValue($value) {
		$this->value = $value;

		return $this;
	}

	/**
	 * Get value
	 *
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Set title
	 *
	 * @param string $title
	 * @return Settings
	 */
	public function setTitle($title) {
		$this->title = $title;

		return $this;
	}

	/**
	 * Get title
	 *
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return Settings
	 */
	public function setDescription($description) {
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Set inputType
	 *
	 * @param string $inputType
	 * @return Settings
	 */
	public function setInputType($inputType) {
		$this->inputType = $inputType;

		return $this;
	}

	/**
	 * Get inputType
	 *
	 * @return string
	 */
	public function getInputType() {
		return $this->inputType;
	}

	/**
	 * Set editable
	 *
	 * @param boolean $editable
	 * @return Settings
	 */
	public function setEditable($editable) {
		$this->editable = $editable;

		return $this;
	}

	/**
	 * Get editable
	 *
	 * @return boolean
	 */
	public function getEditable() {
		return $this->editable;
	}

	/**
	 * Set params
	 *
	 * @param string $params
	 * @return Settings
	 */
	public function setParams($params) {
		$this->params = $params;

		return $this;
	}

	/**
	 * Get params
	 *
	 * @return string
	 */
	public function getParams() {
		return $this->params;
	}

	/**
	 * Set updated
	 *
	 * @param \DateTime $updated
	 * @return Settings
	 */
	public function setUpdated($updated) {
		$this->updated = $updated;

		return $this;
	}

	/**
	 * Get updated
	 *
	 * @return \DateTime
	 */
	public function getUpdated() {
		return $this->updated;
	}
}