<?php

namespace App\Repository;

use App\Entity\ViewStats;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ViewStats|null find($id, $lockMode = null, $lockVersion = null)
 * @method ViewStats|null findOneBy(array $criteria, array $orderBy = null)
 * @method ViewStats[]    findAll()
 * @method ViewStats[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ViewStatsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ViewStats::class);
    }

    // /**
    //  * @return ViewStats[] Returns an array of ViewStats objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */



    /**
     *  @return ViewStats[] Returns an array of ViewStats objects
     */
    public function mois ()
    {
        $from = new \DateTime("first day of last month midnight");
        $to = new \DateTime("first day of this month midnight");

        $stats = $this->createQueryBuilder("v")
            ->andWhere('v.date BETWEEN :from AND :to')
            ->setParameter('from', $from )
            ->setParameter('to', $to)
            ->getQuery()
            ->getResult();

        return $stats;
    }

    public function getStatsPerMonth() {

        $mois_fr = $this->getMoisFr();

        $from = new \DateTime("1 year ago");

        $stats = $this->createQueryBuilder("v")
            ->andWhere('v.date > :from')
            ->setParameter('from', $from )
            ->orderBy('v.date', 'ASC')
            ->getQuery()
            ->getResult();

        $result = [];

        $now = new \DateTime();
        foreach($stats as $stat) {
            $dateStat = $stat->getDate();
            $interval = date_diff($dateStat, $now);
            $mois_ago = $interval->format('%R%m') * 1;
            
            $result[$mois_ago]['mois'] = $mois_fr[ $dateStat->format('n') ];
            $result[$mois_ago]['stats'][] = $stat;
        }

        $array = [];
        foreach($result as $key => $r) {
            $array['label'][$key] = $r['mois'];
            $array['nb_vues'][$key] = count($r['stats']);
        }

        $array['label'] = array_values($array['label']);
        $array['nb_vues'] = array_values($array['nb_vues']);

        return $array;
    }


    public function getMoisFr()
    {
        return array(
            1 => 'Janvier',
            2 => 'Fev',
            3 => 'Mar',
            4 => 'Avr',
            5 => 'Mai',
            6 => 'Jui',
            7 => 'Juil',
            8 => 'Aou',
            9 => 'Sep',
            10=> 'Oct',
            11 => 'Nov',
            12 => 'Dec',
        );
    }






    /*
    public function findOneBySomeField($value): ?ViewStats
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
