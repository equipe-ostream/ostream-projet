<?php

namespace App\Repository;

use App\Entity\FormuleAbonnement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FormuleAbonnement|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormuleAbonnement|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormuleAbonnement[]    findAll()
 * @method FormuleAbonnement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormuleAbonnementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FormuleAbonnement::class);
    }

    // /**
    //  * @return FormuleAbonnement[] Returns an array of FormuleAbonnement objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormuleAbonnement
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
