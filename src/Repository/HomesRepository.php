<?php

namespace App\Repository;

use App\Entity\Homes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Homes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Homes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Homes[]    findAll()
 * @method Homes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Homes::class);
    }

    public function findExclusiveHomes($limit) 
    {
        return $this
            ->createQueryBuilder('h')
            ->andWhere('h.active in (:active)')
            ->setParameter('active', [1,2])
            ->setMaxResults($limit)
            ->orderBy('h.updatedat', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findExclusiveHomesService($service, $offset, $limit) 
    {
        return $this
            ->createQueryBuilder('h')
            ->andWhere('h.active in (:active)')
            ->andWhere('h.service = :service')
            ->setParameter('active', [1,2])
            ->setParameter('service', $service)
            ->orderBy('h.updatedat', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findHomes($service, $offset, $limit) 
    {
        return $this
            ->createQueryBuilder('h')
            ->andWhere('h.active = :active')
            ->andWhere('h.service = :service')
            ->setParameter('active', 1)
            ->setParameter('service', $service)
            ->orderBy('h.updatedat', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    public function findOccupiedHomes() 
    {
        return $this
            ->createQueryBuilder('h')
            ->andWhere('h.active = :active')
            ->setParameter('active', 3)
            ->getQuery()
            ->getResult();
    }

    public function findAllHomes($service)
    {
        return $this
            ->createQueryBuilder('h')
            ->select('count(h.id)')
            ->andWhere('h.active = :active')
            ->andWhere('h.service = :service')
            ->setParameter('active', 1)
            ->setParameter('service', $service)
            ->orderBy('h.updatedat', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function findAllExclusives($service)
    {
        return $this
            ->createQueryBuilder('h')
            ->select('count(h.id)')
            ->andWhere('h.active in (:active)')
            ->andWhere('h.service = :service')
            ->setParameter('active', [1,2])
            ->setParameter('service', $service)
            ->orderBy('h.updatedat', 'DESC')
            ->getQuery()
            ->getResult();
    }

}
