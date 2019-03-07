<?php

namespace App\Repository;

use App\Entity\PreferenceUtilisateurOrdinateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PreferenceUtilisateurOrdinateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method PreferenceUtilisateurOrdinateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method PreferenceUtilisateurOrdinateur[]    findAll()
 * @method PreferenceUtilisateurOrdinateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PreferenceUtilisateurOrdinateurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PreferenceUtilisateurOrdinateur::class);
    }

    // /**
    //  * @return PreferenceUtilisateurOrdinateur[] Returns an array of PreferenceUtilisateurOrdinateur objects
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
    public function findOneBySomeField($value): ?PreferenceUtilisateurOrdinateur
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
