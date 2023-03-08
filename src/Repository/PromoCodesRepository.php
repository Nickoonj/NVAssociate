<?php

namespace App\Repository;

use App\Entity\PromoCodes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<PromoCodes>
 *
 * @method PromoCodes|null find($id, $lockMode = null, $lockVersion = null)
 * @method PromoCodes|null findOneBy(array $criteria, array $orderBy = null)
 * @method PromoCodes[]    findAll()
 * @method PromoCodes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PromoCodesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PromoCodes::class);
    }

    public function save(PromoCodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PromoCodes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function createPaginatedQueryBuilder(string $sortby=null,string $order=null, string $slug = null): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('p');

        if($sortby == '')
        {
            $sortby = 'p.createdAt';            
        }
        if($order == '')
        {
            $order = 'DESC';            
        }
        if($slug != '')
        {
            $queryBuilder = $queryBuilder
             ->andWhere('p.promoName LIKE :val OR p.maximumDiscountAmount LIKE :val OR p.maximumOrderValue LIKE :val
                         OR p.startDate LIKE :val OR p.endDate LIKE :val ')
            ->setParameter('val', '%'.$slug.'%');
            
        }
        //dd($order);
        $queryBuilder = $queryBuilder->orderBy($sortby, $order); 
               
        return $queryBuilder;
    }

//    /**
//     * @return PromoCodes[] Returns an array of PromoCodes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PromoCodes
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
