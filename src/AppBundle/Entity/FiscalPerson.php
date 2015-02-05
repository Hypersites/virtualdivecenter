<?php
/**
 *
 * Describes a real Person inside the system
 *
 **/

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class FiscalPerson
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class FiscalPerson extends  Person{

    /**
     * @var string
     * @ORM\Column(name="fiscal_document", type="string", length=255, nullable=true)
     */
    protected $fiscalDocument;

    /**
     * @var string
     * @ORM\Column(name="identity", type="string", length=255, nullable=true)
     */
    protected $identity;
    /**
     * @var string
     * @ORM\Column(name="birthday", type="date", nullable=false)
     */
    protected $birthday;

    /**
     * @return string
     */
    public function getFiscalDocument()
    {
        return $this->fiscalDocument;
    }

    /**
     * @param string $fiscalDocument
     */
    public function setFiscalDocument($fiscalDocument)
    {
        $this->fiscalDocument = $fiscalDocument;
    }

    /**
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param string $identity
     */
    public function setIdentity($identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }
}