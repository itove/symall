<?php

namespace App\Repository;

use App\Entity\UserCoupon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UserCoupon>
 *
 * @method UserCoupon|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserCoupon|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserCoupon[]    findAll()
 * @method UserCoupon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserCouponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCoupon::class);
    }

    //    /**
    //     * @return UserCoupon[] Returns an array of UserCoupon objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('u.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?UserCoupon
    //    {
    //        return $this->createQueryBuilder('u')
    //            ->andWhere('u.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
