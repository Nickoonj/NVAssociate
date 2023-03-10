<?php

namespace App\Repository;

use App\Entity\CaSubscriptionAddons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CaSubscriptionAddons>
 *
 * @method CaSubscriptionAddons|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaSubscriptionAddons|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaSubscriptionAddons[]    findAll()
 * @method CaSubscriptionAddons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaSubscriptionAddonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaSubscriptionAddons::class);
    }

    public function save(CaSubscriptionAddons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CaSubscriptionAddons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CaSubscriptionAddons[] Returns an array of CaSubscriptionAddons objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CaSubscriptionAddons
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
