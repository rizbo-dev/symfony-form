<?php

namespace App\Repository;

use App\Entity\Vegetables;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vegetables|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vegetables|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vegetables[]    findAll()
 * @method Vegetables[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VegetablesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vegetables::class);
    }

    // /**
    //  * @return Vegetables[] Returns an array of Vegetables objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Vegetables
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
