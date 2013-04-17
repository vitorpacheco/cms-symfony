<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity
 */
class Comments {
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
	 * @ORM\Column(name="author_name", type="string", length=50, nullable=false)
	 */
	private $authorName;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="author_email", type="string", length=255, nullable=false)
	 */
	private $authorEmail;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="author_url", type="string", length=255, nullable=true)
	 */
	private $authorUrl;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="author_ip", type="string", length=100, nullable=true)
	 */
	private $authorIp;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="title", type="string", length=40, nullable=true)
	 */
	private $title;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="content", type="text", nullable=false)
	 */
	private $content;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="status", type="boolean", nullable=true)
	 */
	private $status;

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
	 * @var \DateTime
	 *
	 * @ORM\Column(name="created", type="datetime", nullable=false)
	 */
	private $created;

	/**
	 * @var \DateTime
	 *
	 * @ORM\Column(name="updated", type="datetime", nullable=false)
	 */
	private $updated;

	/**
	 * @var \Posts
	 *
	 * @ORM\ManyToOne(targetEntity="Posts")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
	 * })
	 */
	private $post;

	/**
	 * @var \Comments
	 *
	 * @ORM\ManyToOne(targetEntity="Comments")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
	 * })
	 */
	private $parent;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set authorName
	 *
	 * @param string $authorName
	 * @return Comments
	 */
	public function setAuthorName($authorName) {
		$this->authorName = $authorName;

		return $this;
	}

	/**
	 * Get authorName
	 *
	 * @return string
	 */
	public function getAuthorName() {
		return $this->authorName;
	}

	/**
	 * Set authorEmail
	 *
	 * @param string $authorEmail
	 * @return Comments
	 */
	public function setAuthorEmail($authorEmail) {
		$this->authorEmail = $authorEmail;

		return $this;
	}

	/**
	 * Get authorEmail
	 *
	 * @return string
	 */
	public function getAuthorEmail() {
		return $this->authorEmail;
	}

	/**
	 * Set authorUrl
	 *
	 * @param string $authorUrl
	 * @return Comments
	 */
	public function setAuthorUrl($authorUrl) {
		$this->authorUrl = $authorUrl;

		return $this;
	}

	/**
	 * Get authorUrl
	 *
	 * @return string
	 */
	public function getAuthorUrl() {
		return $this->authorUrl;
	}

	/**
	 * Set authorIp
	 *
	 * @param string $authorIp
	 * @return Comments
	 */
	public function setAuthorIp($authorIp) {
		$this->authorIp = $authorIp;

		return $this;
	}

	/**
	 * Get authorIp
	 *
	 * @return string
	 */
	public function getAuthorIp() {
		return $this->authorIp;
	}

	/**
	 * Set title
	 *
	 * @param string $title
	 * @return Comments
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
	 * Set content
	 *
	 * @param string $content
	 * @return Comments
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
	 * Set status
	 *
	 * @param boolean $status
	 * @return Comments
	 */
	public function setStatus($status) {
		$this->status = $status;

		return $this;
	}

	/**
	 * Get status
	 *
	 * @return boolean
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * Set lft
	 *
	 * @param integer $lft
	 * @return Comments
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
	 * @return Comments
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
	 * Set created
	 *
	 * @param \DateTime $created
	 * @return Comments
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
	 * @return Comments
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
	 * Set post
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Posts $post
	 * @return Comments
	 */
	public function setPost(\AppSkeleton\CmsBundle\Entity\Posts $post = null) {
		$this->post = $post;

		return $this;
	}

	/**
	 * Get post
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Posts
	 */
	public function getPost() {
		return $this->post;
	}

	/**
	 * Set parent
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Comments $parent
	 * @return Comments
	 */
	public function setParent(\AppSkeleton\CmsBundle\Entity\Comments $parent = null) {
		$this->parent = $parent;

		return $this;
	}

	/**
	 * Get parent
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Comments
	 */
	public function getParent() {
		return $this->parent;
	}
}