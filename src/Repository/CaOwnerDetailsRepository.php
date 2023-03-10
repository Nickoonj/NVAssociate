<?php

namespace App\Repository;

use App\Entity\CaOwnerDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CaOwnerDetails>
 *
 * @method CaOwnerDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method CaOwnerDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method CaOwnerDetails[]    findAll()
 * @method CaOwnerDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CaOwnerDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CaOwnerDetails::class);
    }

    public function save(CaOwnerDetails $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CaOwnerDetails $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CaOwnerDetails[] Returns an array of CaOwnerDetails objects
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

//    public function findOneBySomeField($value): ?CaOwnerDetails
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
