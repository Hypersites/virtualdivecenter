<?php

namespace Hypersites\ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Client
 *
 * @ORM\Table(name="client", indexes={@ORM\Index(name="client_name", columns={"first_name", "last_name"}),
 * @ORM\Index(name="idx_client_birthday", columns={"birthday"})})
 * @ORM\Entity(repositoryClass="Hypersites\ClienteBundle\Entity\ClientRepository")
 * @UniqueEntity("email")
 * @UniqueEntity("fiscaldocument")
 * 
 * 
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;
    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_document", type="string", length=20)
     * @
     */
    private $fiscaldocument;

    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Address", inversedBy="clients", cascade={"persist"})
     * @ORM\JoinTable(name="client_address")
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=15)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="cellphone", type="string", length=15)
     */
    private $cellphone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(
     *  message="Please fill it with a valid email!",
     *  checkMX = true
     * )
     */
    private $email;

    /**
     * @var array
     *
     * @ORM\Column(name="courses", type="array")
     */
    private $courses;

    /**
     * @var array
     *
     * @ORM\Column(name="certifications", type="array")
     */
    private $certifications;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;


    
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime(); 
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->address->add(new Address());
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->certifications = new \Doctrine\Common\Collections\ArrayCollection();
        
        
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
     * Set firstName
     *
     * @param string $firstName
     * @return Client
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Client
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Client
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set fiscaldocument
     *
     * @param string $fiscaldocument
     * @return Client
     */
    public function setFiscaldocument($fiscaldocument)
    {
        $this->fiscaldocument = $fiscaldocument;

        return $this;
    }

    /**
     * Get fiscaldocument
     *
     * @return string 
     */
    public function getFiscaldocument()
    {
        return $this->fiscaldocument;
    }
    
    public function addAdress(Address $address) 
    {
        $this->address->add($address);
        $address->addClient($this);
        return $this;
    }

    /**
     * Set address
     *
     * @param \stdClass $address
     * @return Client
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \stdClass 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set cellphone
     *
     * @param string $cellphone
     * @return Client
     */
    public function setCellphone($cellphone)
    {
        $this->cellphone = $cellphone;

        return $this;
    }

    /**
     * Get cellphone
     *
     * @return string 
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Client
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
     * Set courses
     *
     * @param array $courses
     * @return Client
     */
    public function setCourses($courses)
    {
        $this->courses = $courses;

        return $this;
    }

    /**
     * Get courses
     *
     * @return array 
     */
    public function getCourses()
    {
        return $this->courses;
    }

    /**
     * Set certifications
     *
     * @param array $certifications
     * @return Client
     */
    public function setCertifications($certifications)
    {
        $this->certifications = $certifications;

        return $this;
    }

    /**
     * Get certifications
     *
     * @return array 
     */
    public function getCertifications()
    {
        return $this->certifications;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Client
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Client
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
