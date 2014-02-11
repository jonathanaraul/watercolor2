<?php

namespace Proyecto\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CmsGalleryResource
 *
 * @ORM\Table(name="cms_gallery_resource")
 * @ORM\Entity
 */
class CmsGalleryResource
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Gallery
     *
     * @ORM\ManyToOne(targetEntity="CmsGallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Gallery", referencedColumnName="id")
     * 
     */
    private $gallery;

    /**
     * @var \Resource
     *
     * @ORM\ManyToOne(targetEntity="CmsResource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Resource", referencedColumnName="id")
     * })
     */
    private $resource;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="CmsUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User", referencedColumnName="id")
     * 
     */
    private $user;
	
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set gallery
     *
     * @param \Proyecto\BackBundle\Entity\CmsGallery $gallery
     * @return CmsGalleryResource
     */
    public function setUser(\Proyecto\BackBundle\Entity\CmsGallery $gallery = null)
    {
        $this->gallery = $gallery;
    
        return $this;
    }

    /**
     * Get gallery
     *
     * @return \Proyecto\BackBundle\Entity\CmsGallery
     */
    public function getGallery()
    {
        return $this->gallery;
    }   

    /**
     * Set resource
     *
     * @param \Proyecto\BackBundle\Entity\CmsResource $resource
     * @return CmsGalleryResource
     */
    public function setResource(\Proyecto\BackBundle\Entity\CmsResource $resource = null)
    {
        $this->resource = $resource;
    
        return $this;
    }

    /**
     * Get resource
     *
     * @return \Proyecto\BackBundle\Entity\CmsResource 
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return CmsArticle
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return CmsGalleryResource
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set user
     *
     * @param \Proyecto\BackBundle\Entity\CmsUser $user
     * @return CmsGalleryResource
     */
    public function setUser(\Proyecto\BackBundle\Entity\CmsUser $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Proyecto\BackBundle\Entity\CmsUser
     */
    public function getUser()
    {
        return $this->user;
    }

}