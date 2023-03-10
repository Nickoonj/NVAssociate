<?php

namespace App\Repository;

use App\Entity\Subscriptions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;
/**
 * @extends ServiceEntityRepository<Subscriptions>
 *
 * @method Subscriptions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subscriptions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subscriptions[]    findAll()
 * @method Subscriptions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubscriptionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subscriptions::class);
    }

    public function save(Subscriptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Subscriptions $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function createPaginatedQueryBuilder(string $sortby=null,string $order=null, string $slug = null): QueryBuilder
    {
        
        if($sortby == '')
        {
            $sortby = 's.createdAt';            
        }
        if($order == '')
        {
            $order = 'DESC';            
        }
        if($slug != '')
        {
            $queryBuilder = $this->createQueryBuilder('s')
            ->andWhere('s.planTitle LIKE :val OR s.price LIKE :val OR s.noOfTransaction LIKE :val
                        OR s.noOfClients LIKE :val OR s.noOfEmployee LIKE :val ')
            ->setParameter('val', '%'.$slug.'%')
            ->orderBy($sortby, $order); 
        }
        else{
            $queryBuilder = $this->createQueryBuilder('s')->orderBy($sortby, $order); 
        }
               
        return $queryBuilder;
    }
//    /**
//     * @return Subscriptions[] Returns an array of Subscriptions objects
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

//    public function findOneBySomeField($value): ?Subscriptions
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
