<?php

namespace App\Repository;

use App\Entity\PreferenceUtilisateurSmartphone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PreferenceUtilisateurSmartphone|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreferenceUtilisateurSmartphone|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreferenceUtilisateurSmartphone[]    findAll()
 * @method PreferenceUtilisateurSmartphone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreferenceUtilisateurSmartphoneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PreferenceUtilisateurSmartphone::class);
    }

    // /**
    //  * @return PreferenceUtilisateurSmartphone[] Returns an array of PreferenceUtilisateurSmartphone objects
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
    public function findOneBySomeField($value): ?PreferenceUtilisateurSmartphone
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
