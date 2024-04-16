<?php

namespace App\Repository;

use App\Entity\StoreApply;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StoreApply>
 *
 * @method StoreApply|null find($id, $lockMode = null, $lockVersion = null)
 * @method StoreApply|null findOneBy(array $criteria, array $orderBy = null)
 * @method StoreApply[]    findAll()
 * @method StoreApply[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StoreApplyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StoreApply::class);
    }

    //    /**
    //     * @return StoreApply[] Returns an array of StoreApply objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('s.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?StoreApply
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
