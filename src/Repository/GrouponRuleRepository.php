<?php

namespace App\Repository;

use App\Entity\GrouponRule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GrouponRule>
 *
 * @method GrouponRule|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrouponRule|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrouponRule[]    findAll()
 * @method GrouponRule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrouponRuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GrouponRule::class);
    }

    //    /**
    //     * @return GrouponRule[] Returns an array of GrouponRule objects
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

    //    public function findOneBySomeField($value): ?GrouponRule
    //    {
    //        return $this->createQueryBuilder('g')
    //            ->andWhere('g.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
