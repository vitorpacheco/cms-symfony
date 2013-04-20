<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Logs
 *
 * @ORM\Table(name="logs")
 * @ORM\Entity
 */
class Logs {
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
	 * @ORM\Column(name="title", type="string", length=100, nullable=true)
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
	 * @ORM\Column(name="model", type="string", length=50, nullable=true)
	 */
	private $model;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="foreign_key", type="integer", nullable=true)
	 */
	private $foreignKey;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="action", type="string", length=50, nullable=true)
	 */
	private $action;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="change", type="text", nullable=true)
	 */
	private $change;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="created", type="datetime", nullable=true)
	 * @Gedmo\Timestampable(on="create")
	 */
	private $created;

	/**
	 * @var \Users
	 *
	 * @ORM\ManyToOne(targetEntity="Users")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 * })
	 */
	private $user;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set title
	 *
	 * @param string $title
	 * @return Logs
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
	 * @return Logs
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
	 * Set model
	 *
	 * @param string $model
	 * @return Logs
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
	 * @return Logs
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
	 * Set action
	 *
	 * @param string $action
	 * @return Logs
	 */
	public function setAction($action) {
		$this->action = $action;

		return $this;
	}

	/**
	 * Get action
	 *
	 * @return string
	 */
	public function getAction() {
		return $this->action;
	}

	/**
	 * Set change
	 *
	 * @param string $change
	 * @return Logs
	 */
	public function setChange($change) {
		$this->change = $change;

		return $this;
	}

	/**
	 * Get change
	 *
	 * @return string
	 */
	public function getChange() {
		return $this->change;
	}

	/**
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return Logs
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

	/**
	 * Set user
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Users $user
	 * @return Logs
	 */
	public function setUser(\AppSkeleton\CmsBundle\Entity\Users $user = null) {
		$this->user = $user;

		return $this;
	}

	/**
	 * Get user
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Users
	 */
	public function getUser() {
		return $this->user;
	}
}