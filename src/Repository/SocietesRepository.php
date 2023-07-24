<?php

namespace App\Repository;

use App\Entity\Societes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Societes>
 *
 * @method Societes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Societes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Societes[]    findAll()
 * @method Societes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocietesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Societes::class);
    }

    public function save(Societes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Societes $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
 
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Societes[] Returns an array of Societes objects
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

//    public function findOneBySomeField($value): ?Societes
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
