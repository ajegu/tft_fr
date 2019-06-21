<?php

namespace App\Repository;

use App\Entity\ChampionClass;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ChampionClass|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChampionClass|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChampionClass[]    findAll()
 * @method ChampionClass[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChampionClassRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ChampionClass::class);
    }

    // /**
    //  * @return Type[] Returns an array of Type objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Type
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
