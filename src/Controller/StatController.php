<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ViewStatsRepository;

class StatController extends AbstractController
{
    /**
     * @Route("/stat", name="stat")
     */
    public function index(ViewStatsRepository $viewStatsRepo)
    {                      
        // $mois = $viewStatsRepo->mois();
        $mois = $viewStatsRepo->getStatsPerMonth();
        
        return $this->render('stat/stat.html.twig', [
            'mois' => $mois
        ]);
    }
 
}
