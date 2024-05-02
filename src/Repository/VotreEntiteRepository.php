<?php

namespace App\Repository;

use App\Entity\VotreEntite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VotreEntite>
 *
 * @method VotreEntite|null find($id, $lockMode = null, $lockVersion = null)
 * @method VotreEntite|null findOneBy(array $criteria, array $orderBy = null)
 * @method VotreEntite[]    findAll()
 * @method VotreEntite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VotreEntiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VotreEntite::class);
    }

//    /**
//     * @return VotreEntite[] Returns an array of VotreEntite objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VotreEntite
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
