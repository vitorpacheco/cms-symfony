<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts")
 * @ORM\Entity
 */
class Contacts {
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
	 * @ORM\Column(name="first_name", type="string", length=50, nullable=true)
	 */
	private $firstName;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="last_name", type="string", length=50, nullable=true)
	 */
	private $lastName;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="phone", type="string", length=20, nullable=true)
	 */
	private $phone;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="mobile", type="string", length=20, nullable=true)
	 */
	private $mobile;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="email", type="string", length=255, nullable=false)
	 */
	private $email;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="skype", type="string", length=50, nullable=true)
	 */
	private $skype;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="active", type="boolean", nullable=false)
	 */
	private $active;

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
	 * @var \Users
	 *
	 * @ORM\ManyToOne(targetEntity="Users")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
	 * })
	 */
	private $owner;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set firstName
	 *
	 * @param string $firstName
	 * @return Contacts
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;

		return $this;
	}

	/**
	 * Get firstName
	 *
	 * @return string
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Set lastName
	 *
	 * @param string $lastName
	 * @return Contacts
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;

		return $this;
	}

	/**
	 * Get lastName
	 *
	 * @return string
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Set phone
	 *
	 * @param string $phone
	 * @return Contacts
	 */
	public function setPhone($phone) {
		$this->phone = $phone;

		return $this;
	}

	/**
	 * Get phone
	 *
	 * @return string
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Set mobile
	 *
	 * @param string $mobile
	 * @return Contacts
	 */
	public function setMobile($mobile) {
		$this->mobile = $mobile;

		return $this;
	}

	/**
	 * Get mobile
	 *
	 * @return string
	 */
	public function getMobile() {
		return $this->mobile;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 * @return Contacts
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
	 * Set skype
	 *
	 * @param string $skype
	 * @return Contacts
	 */
	public function setSkype($skype) {
		$this->skype = $skype;

		return $this;
	}

	/**
	 * Get skype
	 *
	 * @return string
	 */
	public function getSkype() {
		return $this->skype;
	}

	/**
	 * Set active
	 *
	 * @param boolean $active
	 * @return Contacts
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

	/**
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return Contacts
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
	 * @return Contacts
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
	 * Set owner
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Users $owner
	 * @return Contacts
	 */
	public function setOwner(\AppSkeleton\CmsBundle\Entity\Users $owner = null) {
		$this->owner = $owner;

		return $this;
	}

	/**
	 * Get owner
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Users
	 */
	public function getOwner() {
		return $this->owner;
	}
}