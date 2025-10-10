<?php

namespace App\Repository;

use App\Entity\Tournee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tournee>
 */
class TourneeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tournee::class);
    }

    // Exemple de méthode personnalisée
    public function findByDate(\DateTimeInterface $date): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.date = :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult();
    }
}
