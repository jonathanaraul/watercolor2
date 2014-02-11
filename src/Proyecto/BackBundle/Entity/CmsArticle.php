<?php

namespace Proyecto\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CmsArticle
 *
 * @ORM\Table(name="cms_article")
 * @ORM\Entity
 */
class CmsArticle
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
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=false)
     */
    private $published;

    /**
     * @var boolean
     *
     * @ORM\Column(name="suspended", type="boolean", nullable=false)
     */
    private $suspended;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="friendly_name", type="string", length=255, nullable=false)
     */
    private $friendlyName;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=false)
     */
    private $place;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;
		
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=false)
     */
    private $ip;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=true)
     */
    private $dateUpdated;

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
     * @var \Resource
     *
     * @ORM\ManyToOne(targetEntity="CmsResource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Resource", referencedColumnName="id")
     * })
     */

    private $resource;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=false)
     */
    private $keywords;

    /**
     * @var integer
     *
     * @ORM\Column(name="lang", type="integer", nullable=false)
     */
    private $lang;
	
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
     * Set name
     *
     * @param string $name
     * @return CmsArticle
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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
     * Set content
     *
     * @param string $content
     * @return CmsArticle
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set friendlyName
     *
     * @param string $friendlyName
     * @return CmsArticle
     */
    public function setFriendlyName($friendlyName)
    {
        $this->friendlyName = $friendlyName;
    
        return $this;
    }

    /**
     * Get friendlyName
     *
     * @return string 
     */
    public function getFriendlyName()
    {
        return $this->friendlyName;
    }

    /**
     * Set place
     *
     * @param string place
     * @return CmsArticle
     */
    public function setPlace($place)
    {
        $this->place = $place;
    
        return $this;
    }

    /**
     * Get place
     *
     * @return string 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set resource
     *
     * @param \Proyecto\PrincipalBundle\Entity\CmsResource $resource
     * @return CmsArticle
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
     * Set user
     *
     * @param \Proyecto\PrincipalBundle\Entity\User $user
     * @return CmsArticle
     */
    public function setUser(\Proyecto\BackBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Proyecto\BackBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Set keywords
     *
     * @param string $keywords
     * @return CmsArticle
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set suspended
     *
     * @param boolean $suspended
     * @return CmsArticle
     */
    public function setSuspended($suspended)
    {
        $this->suspended = $suspended;
    
        return $this;
    }

    /**
     * Get suspended
     *
     * @return boolean 
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * Set user
     *
     * @param \Proyecto\BackBundle\Entity\CmsUser $user
     * @return CmsArticle
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
    
    /**
     * Set ip
     *
     * @param string $ip
     * @return CmsArticle
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
     * Set date
     *
     * @param \DateTime $date
     * @return CmsArticle
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return CmsArticle
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return CmsArticle
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    
        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return CmsArticle
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }
	
    /**
     * Set lang
     *
     * @param integer $lang
     * @return CmsArticle
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    
        return $this;
    }

    /**
     * Get lang
     *
     * @return integer 
     */
    public function getLang()
    {
        return $this->lang;
    }

}