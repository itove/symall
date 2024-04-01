<?php

namespace App\Repository;

use App\Entity\Groupon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Groupon>
 *
 * @method Groupon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Groupon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Groupon[]    findAll()
 * @method Groupon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrouponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Groupon::class);
    }

//    /**
//     * @return Groupon[] Returns an array of Groupon objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Groupon
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
