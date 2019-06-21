<?php

namespace App\Repository;

use App\Entity\ClassSynergy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ClassSynergy|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClassSynergy|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClassSynergy[]    findAll()
 * @method ClassSynergy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassSynergyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ClassSynergy::class);
    }

    // /**
    //  * @return Synergy[] Returns an array of Synergy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Synergy
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
