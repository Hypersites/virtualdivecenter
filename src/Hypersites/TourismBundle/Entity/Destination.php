<?php

namespace Hypersites\TourismBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destination
 *
 * @ORM\Table(name = "destination")
 * @ORM\Entity(repositoryClass="Hypersites\TourismBundle\Entity\DestinationRepository")
 */
class Destination
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
     * @ORM\Column(name="region", type="string", length=255)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="main_picture", type="string", length=255)
     */
    private $mainPicture;

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

    /**
     * @var array
     *
     * @ORM\Column(name="evaluations", type="array")
     */
    private $evaluations;

    /**
     * @var array
     *
     * @ORM\Column(name="trips", type="array")
     */
    private $trips;


    public function __construct() {
        $this->createdAt = new \DateTime();
        $this->updatedAt = clone $this->createdAt;
        $this->evaluations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->trips = new \Doctrine\Common\Collections\ArrayCollection();
        
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
     * @return Destination
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
     * Set region
     *
     * @param string $region
     * @return Destination
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Destination
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Destination
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
     * Set mainPicture
     *
     * @param string $mainPicture
     * @return Destination
     */
    public function setMainPicture($mainPicture)
    {
        $this->mainPicture = $mainPicture;

        return $this;
    }

    /**
     * Get mainPicture
     *
     * @return string 
     */
    public function getMainPicture()
    {
        return $this->mainPicture;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Destination
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
     * @return Destination
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
     * Set evaluations
     *
     * @param array $evaluations
     * @return Destination
     */
    public function setEvaluations($evaluations)
    {
        $this->evaluations = $evaluations;

        return $this;
    }
    
    /**
     * 
     */
    public function addEvaluation($evaluation)
    {
        $this->evaluations->add($evaluation);
    }
     

    /**
     * Get evaluations
     *
     * @return array 
     */
    public function getEvaluations()
    {
        return $this->evaluations;
    }

    /**
     * Set trips
     *
     * @param array $trips
     * @return Destination
     */
    public function setTrips($trips)
    {
        $this->trips = $trips;

        return $this;
    }

    /**
     * Get trips
     *
     * @return array 
     */
    public function getTrips()
    {
        return $this->trips;
    }
}
