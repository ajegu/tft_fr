<?php

namespace App\Repository;

use App\Entity\ClassSynergyRequirement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ClassSynergyRequirement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClassSynergyRequirement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClassSynergyRequirement[]    findAll()
 * @method ClassSynergyRequirement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClassSynergyRequirementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ClassSynergyRequirement::class);
    }

    // /**
    //  * @return SynergyCondition[] Returns an array of SynergyCondition objects
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
    public function findOneBySomeField($value): ?SynergyCondition
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
