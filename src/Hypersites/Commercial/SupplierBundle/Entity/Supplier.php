<?php

namespace Hypersites\Commercial\SupplierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Person;

/**
 * Supplier
 *
 * @ORM\Table(name="supplier")
 * @ORM\Entity(repositoryClass="Hypersites\Commercial\SupplierBundle\Entity\SupplierRepository")
 */
class Supplier
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
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;
    
    /**
     *
     * @var ArrayCollection
     */
    private $services;
    
    /**
     *
     * @var ArrayCollection
     */
    private $products;
    
    /**
     *
     * @var ArrayCollection 
     */
    private $transactions;
    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;
    
    public function __construct() 
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = clone $this->createdAt;
        $this->services = new ArrayCollection();
        $this->products = new ArrayCollection();
        $this->transactions = new ArrayCollection();
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
     * Set active
     *
     * @param boolean $active
     * @return Supplier
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Supplier
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
     * @return Supplier
     */
    public function setUpdatedAt(\DateTime $updatedAt)
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
     * 
     * @return ArrayCollection
     */
    public function getServices() {
        return $this->services;
    }
    
    /**
     * 
     * @return ArrayCollection
     */
    public function getProducts() {
        return $this->products;
    }

    /**
     * 
     * @return ArrayCollection
     */
    public function getTransactions() {
        return $this->transactions;
    }

    public function setServices(ArrayCollection $services) {
        $this->services = $services;
        return $this;
    }

    public function setProducts(ArrayCollection $products) {
        $this->products = $products;
        return $this;
    }

    public function setTransactions(ArrayCollection $transactions) {
        $this->transactions = $transactions;
        return $this;
    }
    
    public function getAddress() {
        return $this->person->getAddress();
    }
    
    public function setAddress(AppBundle\Entity\Address $address) {
        $this->person->setAddress($address);
        return $this;
    }

}