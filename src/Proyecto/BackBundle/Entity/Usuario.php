<?php

namespace Proyecto\BackBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * Proyecto\PrincipalBundle\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Proyecto\PrincipalBundle\Entity\UsuarioRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @var \Cmsresource
     *
     * @ORM\ManyToOne(targetEntity="CmsResource")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Cmsresource", referencedColumnName="id")
     * })
     */

    private $cmsresource;


    public function __construct()
    {
        $this->salt = md5(uniqid(null, true));
    }
  

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
     * Set username
     *
     * @param string $username
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @inheritDoc
     */
    public function getRoles()
    {
             return array('ROLE_ADMIN');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
        ) = unserialize($serialized);
    }

    /**
     * Set cmsresource
     *
     * @param \Proyecto\PrincipalBundle\Entity\Cancha $cancha
     * @return Deportes
     */
    public function setCmsresource(\Proyecto\BackBundle\Entity\CmsResource $cmsresource = null)
    {
        $this->cmsresource = $cmsresource;
    
        return $this;
    }

    /**
     * Get cmsresource
     *
     * @return \Proyecto\BackBundle\Entity\CmsResource 
     */
    public function getCmsresource()
    {
        return $this->cmsresource;
    }

/////////////////////////////////////////////////////////////////////

        /**
     * Set cancha
     *
     * @param \Proyecto\PrincipalBundle\Entity\Cancha $cancha
     * @return Deportes
     */
    public function setCancha(\Proyecto\PrincipalBundle\Entity\Cancha $cancha = null)
    {
        $this->cancha = $cancha;
    
        return $this;
    }

    /**
     * Get cancha
     *
     * @return \Proyecto\PrincipalBundle\Entity\Cancha 
     */
    public function getCancha()
    {
        return $this->cancha;
    }
////////////////////////////////////////////////////////////////////


}