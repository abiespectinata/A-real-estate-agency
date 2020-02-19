<?php

namespace App\Repository;

use App\Entity\Homes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Home|null find($id, $lockMode = null, $lockVersion = null)
 * @method Home|null findOneBy(array $criteria, array $orderBy = null)
 * @method Home[]    findAll()
 * @method Home[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SHomesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Homes::class);
    }

    public function homesSearch($criteria)
    {
        $research =  $this->createQueryBuilder('h');

        if($criteria['type'] != '') 
        {
            $research ->andWhere('h.type = :type')
            ->setParameter('type', $criteria['type'])
            ->orderBy('h.type', 'ASC');
        }

        if($criteria['service'] != '')
        {
            $research
            ->andWhere('h.service = :service')
            ->setParameter('service', $criteria['service'])
            ->orderBy('h.service', 'ASC');
        }

        if($criteria['furnished'] != '') 
        {
        $research
            ->andWhere('h.furnished = :furnished')
            ->setParameter('furnished', $criteria['furnished'])
            ->orderBy('h.furnished', 'ASC');  
        }

        if($criteria['minSurface'] != null )
        {
            $research ->andWhere('h.surface > :minSurface')
            ->setParameter('minSurface', $criteria['minSurface'])
            ->orderBy('h.surface', 'ASC');
        }

        if($criteria['maximumPrice'] != null) 
        {
            $research ->andWhere('h.price < :maximumPrice')
            ->setParameter('maximumPrice', $criteria['maximumPrice'])
            ->orderBy('h.price', 'ASC');
        }
        if($criteria['rooms'] != null) 
        {
            $research ->andWhere('h.rooms < :rooms')
            ->setParameter('rooms', $criteria['rooms'])
            ->orderBy('h.rooms', 'ASC');
        }
        return $research
        ->andWhere('h.active in (:active)')
        ->setParameter('active', [1,2])
        ->getQuery()
        ->getResult();
    }

}