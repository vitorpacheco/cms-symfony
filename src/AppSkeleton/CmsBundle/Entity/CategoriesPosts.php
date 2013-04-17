<?php

namespace AppSkeleton\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesPosts
 *
 * @ORM\Table(name="categories_posts")
 * @ORM\Entity
 */
class CategoriesPosts {
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @var \Categories
	 *
	 * @ORM\ManyToOne(targetEntity="Categories")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
	 * })
	 */
	private $category;

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
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set category
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Categories $category
	 * @return CategoriesPosts
	 */
	public function setCategory(\AppSkeleton\CmsBundle\Entity\Categories $category = null) {
		$this->category = $category;

		return $this;
	}

	/**
	 * Get category
	 *
	 * @return \AppSkeleton\CmsBundle\Entity\Categories
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Set post
	 *
	 * @param \AppSkeleton\CmsBundle\Entity\Posts $post
	 * @return CategoriesPosts
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
}