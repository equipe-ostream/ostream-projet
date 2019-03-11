<?php

namespace App\Repository;

use App\Entity\Dispositif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dispositif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dispositif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dispositif[]    findAll()
 * @method Dispositif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DispositifRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dispositif::class);
    }
}
