<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity
 */
class Posts {
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
	 * @ORM\Column(name="title", type="string", length=80, nullable=false)
	 */
	private $title;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="slug", type="string", length=50, nullable=false)
	 */
	private $slug;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="content", type="text", nullable=false)
	 */
	private $content;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="lft", type="integer", nullable=true)
	 */
	private $lft;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="rght", type="integer", nullable=true)
	 */
	private $rght;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="promote", type="boolean", nullable=true)
	 */
	private $promote;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="published", type="boolean", nullable=true)
	 */
	private $published;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="status_comments", type="boolean", nullable=false)
	 */
	private $statusComments;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="comment_count", type="integer", nullable=true)
	 */
	private $commentCount;

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
	 * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
	 * })
	 */
	private $author;

	/**
	 * @var \Posts
	 *
	 * @ORM\ManyToOne(targetEntity="Posts")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
	 * })
	 */
	private $parent;

	/**
	 * @var \Types
	 *
	 * @ORM\ManyToOne(targetEntity="Types")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
	 * })
	 */
	private $type;

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
	 * @return Posts
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
	 * Set slug
	 *
	 * @param string $slug
	 * @return Posts
	 */
	public function setSlug($slug) {
		$this->slug = $slug;

		return $this;
	}

	/**
	 * Get slug
	 *
	 * @return string
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * Set content
	 *
	 * @param string $content
	 * @return Posts
	 */
	public function setContent($content) {
		$this->content = $content;

		return $this;
	}

	/**
	 * Get content
	 *
	 * @return string
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * Set lft
	 *
	 * @param integer $lft
	 * @return Posts
	 */
	public function setLft($lft) {
		$this->lft = $lft;

		return $this;
	}

	/**
	 * Get lft
	 *
	 * @return integer
	 */
	public function getLft() {
		return $this->lft;
	}

	/**
	 * Set rght
	 *
	 * @param integer $rght
	 * @return Posts
	 */
	public function setRght($rght) {
		$this->rght = $rght;

		return $this;
	}

	/**
	 * Get rght
	 *
	 * @return integer
	 */
	public function getRght() {
		return $this->rght;
	}

	/**
	 * Set promote
	 *
	 * @param boolean $promote
	 * @return Posts
	 */
	public function setPromote($promote) {
		$this->promote = $promote;

		return $this;
	}

	/**
	 * Get promote
	 *
	 * @return boolean
	 */
	public function getPromote() {
		return $this->promote;
	}

	/**
	 * Set published
	 *
	 * @param boolean $published
	 * @return Posts
	 */
	public function setPublished($published) {
		$this->published = $published;

		return $this;
	}

	/**
	 * Get published
	 *
	 * @return boolean
	 */
	public function getPublished() {
		return $this->published;
	}

	/**
	 * Set statusComments
	 *
	 * @param boolean $statusComments
	 * @return Posts
	 */
	public function setStatusComments($statusComments) {
		$this->statusComments = $statusComments;

		return $this;
	}

	/**
	 * Get statusComments
	 *
	 * @return boolean
	 */
	public function getStatusComments() {
		return $this->statusComments;
	}

	/**
	 * Set commentCount
	 *
	 * @param integer $commentCount
	 * @return Posts
	 */
	public function setCommentCount($commentCount) {
		$this->commentCount = $commentCount;

		return $this;
	}

	/**
	 * Get commentCount
	 *
	 * @return integer
	 */
	public function getCommentCount() {
		return $this->commentCount;
	}

	/**
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return Posts
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
	 * @return Posts
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
	 * Set author
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Users $author
	 * @return Posts
	 */
	public function setAuthor(\AppSkeleton\CmsBundle\Entity\Users $author = null) {
		$this->author = $author;

		return $this;
	}

	/**
	 * Get author
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Users
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Set parent
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Posts $parent
	 * @return Posts
	 */
	public function setParent(\AppSkeleton\CmsBundle\Entity\Posts $parent = null) {
		$this->parent = $parent;

		return $this;
	}

	/**
	 * Get parent
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Posts
	 */
	public function getParent() {
		return $this->parent;
	}

	/**
	 * Set type
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Types $type
	 * @return Posts
	 */
	public function setType(\AppSkeleton\CmsBundle\Entity\Types $type = null) {
		$this->type = $type;

		return $this;
	}

	/**
	 * Get type
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Types
	 */
	public function getType() {
		return $this->type;
	}
}