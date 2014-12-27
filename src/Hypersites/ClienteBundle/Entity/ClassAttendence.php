<?php

namespace Hypersites\ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClassAttendence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Hypersites\ClienteBundle\Entity\ClassAttendenceRepository")
 */
class ClassAttendence
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
     * @var \stdClass
     *
     * @ORM\Column(name="class", type="object")
     */
    private $class;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="client", type="object")
     */
    private $client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetimetz")
     */
    private $updatedAt;


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
     * Set class
     *
     * @param \stdClass $class
     * @return ClassAttendence
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return \stdClass 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set client
     *
     * @param \stdClass $client
     * @return ClassAttendence
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \stdClass 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return ClassAttendence
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
     * @return ClassAttendence
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
