<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Links
 *
 * @ORM\Table(name="links")
 * @ORM\Entity
 */
class Links {
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
	 * @ORM\Column(name="url", type="string", length=255, nullable=false)
	 */
	private $url;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255, nullable=false)
	 */
	private $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="image", type="string", length=255, nullable=true)
	 */
	private $image;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="text", nullable=true)
	 */
	private $description;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="visible", type="boolean", nullable=false)
	 */
	private $visible;

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
	 * Set url
	 *
	 * @param string $url
	 * @return Links
	 */
	public function setUrl($url) {
		$this->url = $url;

		return $this;
	}

	/**
	 * Get url
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 * @return Links
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
	 * Set image
	 *
	 * @param string $image
	 * @return Links
	 */
	public function setImage($image) {
		$this->image = $image;

		return $this;
	}

	/**
	 * Get image
	 *
	 * @return string
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 * @return Links
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
	 * Set visible
	 *
	 * @param boolean $visible
	 * @return Links
	 */
	public function setVisible($visible) {
		$this->visible = $visible;

		return $this;
	}

	/**
	 * Get visible
	 *
	 * @return boolean
	 */
	public function getVisible() {
		return $this->visible;
	}

	/**
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return Links
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
	 * @return Links
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
	 * @return Links
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