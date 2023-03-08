<?php

namespace App\Repository;

use App\Entity\Addons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;

/**
 * @extends ServiceEntityRepository<Addons>
 *
 * @method Addons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Addons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Addons[]    findAll()
 * @method Addons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Addons::class);
    }

    public function save(Addons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Addons $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function createPaginatedQueryBuilder(string $sortby=null,string $order=null, string $slug = null, string $filterBy = null): QueryBuilder
    {
        $queryBuilder = $this->createQueryBuilder('a');

        if($sortby == '')
        {
            $sortby = 'a.createdAt';            
        }
        if($order == '')
        {
            $order = 'DESC';            
        }
        
        if($filterBy != '')
        {           
            $queryBuilder = $queryBuilder
            ->andWhere('a.addOnType = :val')
            ->setParameter('val', $filterBy);                                   
        }
        if($slug != '')
        {
            $queryBuilder = $queryBuilder
             ->andWhere('a.addOnTitle LIKE :val OR a.Price LIKE :val')
             ->setParameter('val', '%'.$slug.'%');            
        }
       
        $queryBuilder = $queryBuilder->orderBy($sortby, $order); 
        
          
        return $queryBuilder;
    }
//    /**
//     * @return Addons[] Returns an array of Addons objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Addons
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
