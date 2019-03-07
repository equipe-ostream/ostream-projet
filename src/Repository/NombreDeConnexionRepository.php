<?php

namespace App\Repository;

use App\Entity\NombreDeConnexion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method NombreDeConnexion|null find($id, $lockMode = null, $lockVersion = null)
 * @method NombreDeConnexion|null findOneBy(array $criteria, array $orderBy = null)
 * @method NombreDeConnexion[]    findAll()
 * @method NombreDeConnexion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NombreDeConnexionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, NombreDeConnexion::class);
    }

    // /**
    //  * @return NombreDeConnexion[] Returns an array of NombreDeConnexion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NombreDeConnexion
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
