<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users {
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
	 * @ORM\Column(name="login", type="string", length=30, nullable=false)
	 */
	private $login;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="password", type="string", length=255, nullable=false)
	 */
	private $password;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="full_name", type="string", length=100, nullable=true)
	 */
	private $fullName;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", length=255, nullable=true)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="activation_key", type="string", length=255, nullable=true)
	 */
	private $activationKey;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="created", type="datetime", nullable=false)
	 * @Gedmo\Timestampable(on="create")
	 */
	private $created;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="updated", type="datetime", nullable=false)
	 * @Gedmo\Timestampable(on="update")
	 */
	private $updated;

	/**
	 * @var \Groups
	 *
	 * @ORM\ManyToOne(targetEntity="Groups")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
	 * })
	 */
	private $group;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set login
	 *
	 * @param string $login
	 * @return Users
	 */
	public function setLogin($login) {
		$this->login = $login;

		return $this;
	}

	/**
	 * Get login
	 *
	 * @return string
	 */
	public function getLogin() {
		return $this->login;
	}

	/**
	 * Set password
	 *
	 * @param string $password
	 * @return Users
	 */
	public function setPassword($password) {
		$this->password = $password;

		return $this;
	}

	/**
	 * Get password
	 *
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Set fullName
	 *
	 * @param string $fullName
	 * @return Users
	 */
	public function setFullName($fullName) {
		$this->fullName = $fullName;

		return $this;
	}

	/**
	 * Get fullName
	 *
	 * @return string
	 */
	public function getFullName() {
		return $this->fullName;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 * @return Users
	 */
	public function setEmail($email) {
		$this->email = $email;

		return $this;
	}

	/**
	 * Get email
	 *
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Set activationKey
	 *
	 * @param string $activationKey
	 * @return Users
	 */
	public function setActivationKey($activationKey) {
		$this->activationKey = $activationKey;

		return $this;
	}

	/**
	 * Get activationKey
	 *
	 * @return string
	 */
	public function getActivationKey() {
		return $this->activationKey;
	}

	/**
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return Users
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
	 * Set updated
	 *
	 * @param \DateTime $updated
	 * @return Users
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

	/**
	 * Set group
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Groups $group
	 * @return Users
	 */
	public function setGroup(\AppSkeleton\CmsBundle\Entity\Groups $group = null) {
		$this->group = $group;

		return $this;
	}

	/**
	 * Get group
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Groups
	 */
	public function getGroup() {
		return $this->group;
	}
}