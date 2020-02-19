<?php

namespace App\Controller;


use App\Form\SearchHomesType;
use App\Repository\SHomesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class SearchController extends AbstractController
{
    /**
     *  @Route("search/", name="search_homes")
     */
    public function homesSearch(Request $request, SHomesRepository $shRepository)
    {
        $homes = [];
        
        $form = $this->createForm(SearchHomesType::class);
         
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $criteria = $form->getData();
            $criteria['maximumPrice']=$form->get('maximumPrice')->getData();
            $criteria['minSurface']=$form->get('minSurface')->getData();
            $criteria['rooms']=$form->get('rooms')->getData();
            // dump($criteria);die;
            
            $homes = $shRepository->homesSearch($criteria);
        }
        return $this->render('search/results.html.twig', [
        'homes' => $homes
        ]);
    }

    public function searchForm()
    {        
        $form = $this->createForm(SearchHomesType::class);
        return $this->render('search/searchForm.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}