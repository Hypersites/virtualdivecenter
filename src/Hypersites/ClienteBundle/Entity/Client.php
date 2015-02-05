<?php

namespace Hypersites\ClienteBundle\Entity;

use AppBundle\Entity\Person;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Address;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Client
 *
 *
 * @ORM\Entity(repositoryClass="Hypersites\ClienteBundle\Entity\ClientRepository")
 * @ORM\Table(name="client")
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
    protected $id;

    /**
     * @var Person
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Person")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */
    protected $person;



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
     * @var DateTime
     * @ORM\Column(name="c")
     */
    private $createdAt;

    private $updatedAt;

    
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
        $this->person->setAddress(new Address());
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->certifications = new \Doctrine\Common\Collections\ArrayCollection();
        
        
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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param Person $person
     */
    public function setPerson($person)
    {
        $this->person = $person;
    }
}
