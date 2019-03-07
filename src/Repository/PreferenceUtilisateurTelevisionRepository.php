<?php

namespace App\Repository;

use App\Entity\PreferenceUtilisateurTelevision;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PreferenceUtilisateurTelevision|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreferenceUtilisateurTelevision|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreferenceUtilisateurTelevision[]    findAll()
 * @method PreferenceUtilisateurTelevision[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreferenceUtilisateurTelevisionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PreferenceUtilisateurTelevision::class);
    }

    // /**
    //  * @return PreferenceUtilisateurTelevision[] Returns an array of PreferenceUtilisateurTelevision objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PreferenceUtilisateurTelevision
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
