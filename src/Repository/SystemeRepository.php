<?php

namespace App\Repository;

use App\Entity\Systeme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Systeme|null find($id, $lockMode = null, $lockVersion = null)
 * @method Systeme|null findOneBy(array $criteria, array $orderBy = null)
 * @method Systeme[]    findAll()
 * @method Systeme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SystemeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Systeme::class);
    }
}
