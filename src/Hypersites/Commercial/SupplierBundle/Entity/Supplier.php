<?php

namespace Hypersites\Commercial\SupplierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Doctrine\Common\Collections\ArrayCollection;

/**
 * Supplier
 *
 * @ORM\Table()
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
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="kind_person", type="string", length=255)
     */
    private $kindPerson;

    /**
     * @var string
     *
     * @ORM\Column(name="fiscal_document", type="string", length=255)
     */
    private $fiscalDocument;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;
    
    /**
     * @var ArrayCollection
     *
     * @ORM\ManyToMany(targetEntity="Hypersites\ClienteBundle\Entity\Address", inversedBy="suppliers", cascade={"persist"})
     * @ORM\JoinTable(name="supplier_address")
     */
    private $address;
    
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
        $this->address = new ArrayCollection();
        $this->addAddress(new \Hypersites\ClienteBundle\Entity\Address());
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
     * Set name
     *
     * @param string $name
     * @return Supplier
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
     * Set website
     *
     * @param string $website
     * @return Supplier
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Supplier
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Supplier
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set kindPerson
     *
     * @param string $kindPerson
     * @return Supplier
     */
    public function setKindPerson($kindPerson)
    {
        $this->kindPerson = $kindPerson;

        return $this;
    }

    /**
     * Get kindPerson
     *
     * @return string 
     */
    public function getKindPerson()
    {
        return $this->kindPerson;
    }

    /**
     * Set fiscalDocument
     *
     * @param string $fiscalDocument
     * @return Supplier
     */
    public function setFiscalDocument($fiscalDocument)
    {
        $this->fiscalDocument = $fiscalDocument;

        return $this;
    }

    /**
     * Get fiscalDocument
     *
     * @return string 
     */
    public function getFiscalDocument()
    {
        return $this->fiscalDocument;
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
        return $this->address;
    }

    public function setAddress(ArrayCollection $address) {
        $this->address = $address;
        return $this;
    }
    
    public function addAddress(\Hypersites\ClienteBundle\Entity\Address $address) {
        $this->address->add($address);
        return $this;
    }

}