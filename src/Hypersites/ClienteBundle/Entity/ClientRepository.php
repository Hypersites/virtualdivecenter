<?php

namespace Hypersites\ClienteBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends EntityRepository
{
    public function findLead()
    {
        return $this->findByOrders("");
    }
}
