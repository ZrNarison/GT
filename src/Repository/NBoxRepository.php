<?php

namespace App\Repository;

use App\Entity\NBox;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NBox|null find($id, $lockMode = null, $lockVersion = null)
 * @method NBox|null findOneBy(array $criteria, array $orderBy = null)
 * @method NBox[]    findAll()
 * @method NBox[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NBoxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NBox::class);
    }

    // /**
    //  * @return NBox[] Returns an array of NBox objects
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
    public function findOneBySomeField($value): ?NBox
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
