<?php
/**
 * This one represents a company inside the system
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Company extends Person
{
    /**
     * @var string
     * @ORM\Column(name="tax_number", type="string", length=255, nullable=false)
     */
    protected $taxNumber;
    /**
     * @var string
     * @ORM\Column(name="state_registration", type="string", length=255, nullable=true)
     */
    protected $stateRegistration;
    /**
     * @var string
     * @ORM\Column(name="city_registration", type="string", length=255, nullable=true)
     */
    protected $cityRegistration;

    /**
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * @return string
     */
    public function getStateRegistration()
    {
        return $this->stateRegistration;
    }

    /**
     * @param string $stateRegistration
     */
    public function setStateRegistration($stateRegistration)
    {
        $this->stateRegistration = $stateRegistration;
    }

    /**
     * @param string $taxNumber
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;
    }
}