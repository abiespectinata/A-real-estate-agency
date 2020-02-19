<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Homes;
use App\Entity\Requests;
use App\Entity\Profils;
use App\Entity\ViewStats;
use App\Form\HomesType;
use App\Form\RequestType;
use App\Repository\HomesRepository;
use App\Repository\RequestsRepository;
use App\Service\EmailService;
use DateTime;
use Symfony\Component\HttpFoundation\JsonResponse;
// use App\Form\Contact;

class HomesController extends AbstractController
{
    /**
     * @Route("/buy", name="buy")
     */
    public function buy(HomesRepository $homesRepo, Request $request)
    {
        $limit = 9;
        $page = $request->query->get('page') ?? 1;
        $page = $page < 1 ? : $page;
        $offset = ($page -1) * $limit;
    
        $limitedhomes = $homesRepo->findHomes('achat', $offset, $limit);
        $allhomes = $homesRepo->findAllHomes('achat');


        $exclusivehomes = $homesRepo->findExclusiveHomesService('achat', $offset, $limit);
        $allExclusivehomes = $homesRepo->findAllExclusives('achat');


        return $this->render('homes/buy.html.twig', [
            'limitedhomes' => $limitedhomes,
            'exclusivehomes' => $exclusivehomes,
            'limitPerPage' => $limit,
            'currentPage' => $page,
            'nblimitedhomes' => $allhomes,
            'nbExclusivehomes' => $allExclusivehomes,
        ]);
    }

    
    /**
     * @Route("/renting", name="renting")
     */
    public function renting(HomesRepository $homesRepo, Request $request)
    {

        $limit = 9;
        $page = $request->query->get('page') ?? 1;
        $page = $page < 1 ? : $page;
        $offset = ($page -1) * $limit;

        $limitedhomes = $homesRepo->findHomes('location', $offset, $limit);
        $allhomes = $homesRepo->findAllHomes('location');


        $exclusivehomes = $homesRepo->findExclusiveHomesService('location', $offset, $limit);
        $allExclusivehomes = $homesRepo->findAllExclusives('location');


        return $this->render('homes/renting.html.twig', [
            'limitedhomes' => $limitedhomes,
            'exclusivehomes' => $exclusivehomes,
            'nblimitedhomes' => $allhomes,
            'nbExclusivehomes' => $allExclusivehomes,
            'limitPerPage' => $limit,
            'currentPage' => $page,
        ]);
    }


    /**
    * @Route("/home/{id}", name="home")
    */
    public function home($id, Request $request, EmailService $emailService, HomesRepository $homesRepo)
    {

        $em = $this->getDoctrine()->getManager();
        $HomesRepository = $em->getRepository(Homes::class);

        $home = $HomesRepository->find($id);

        //Si la personne n'as pas le rôle d'admin et que le bien n'est plus disponible, on l'a renvoie à la page d'accueil
        
        if(!$this->getUser()->hasRole('ROLE_ADMIN')){
            if($home->getActive() < 1 && $home->getActive() > 2){
                $this->addFlash('warning','Le logement demandé n\'est plus disponible');
                return $this->redirectToRoute('index');
            }
        }
        
        if($id != 0){
            $home->setViewcounter($home->getViewcounter()+1);
        
            $viewStat = (new ViewStats())
                ->setDate(new \DateTime())
                ->setHome($home);
            $em->persist($viewStat);
        
        }
        $em->flush();

        if($request->isMethod('POST')){
            $data = $request->request->all();
            $emailService->contactBien($data);

            $this->addFlash('success', 'Nous avons bien reçu votre e-mail!');

            return $this->redirectToRoute('home', ['id' => $id]
            );
        }

        if ($id != 0 && !$home) {
            $this->addFlash('danger', "La référence demandée n'existe pas.");
            return $this->redirectToRoute('index');
        }

        $exclusiveHomes = $homesRepo->findExclusiveHomes(3);

        $recentHomes = $homesRepo->findBy(
            ['active' => '1'],
            ['updatedat' => 'DESC'],
            4
        );

        return $this->render('homes/home.html.twig', [
            'home' => $home,
            'recentHomes' => $recentHomes,
            'exclusiveHomes' => $exclusiveHomes
        ]);


    }


    
    /**
     * @Route("/a/home-crud/{id}", name="homeCrud")
     */
    public function homeCrud($id, Request $request, HomesRepository $homesRepo)
    {

        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $em = $this->getDoctrine()->getManager();
        //Si l'id est 0, on crée un nouvel article
        if($id == 0) {
            // if(!$this->getUser()->hasRole('ROLE_ADMIN')) {
            //     throw new \Exception('Access denied.');
            // }
            $home = new Homes();
            $nouveau = true;
        } else {
            $home = $homesRepo->find($id);
            if(!$home){
                $this->addFlash('danger', "Ce bien n'a pas été trouvé.");
                return $this->redirectToRoute('index');
            }
            $nouveau = false;
        }

        //Supprimer l'article
        $action = $request->query->get('action');
        if($action && $action == "delete"){
            $em->remove($home);
            $em->flush();

            $this->addFlash('warning', "Le bien a été supprimé.");
            return $this->redirectToRoute('index');
        }


        $form = $this->createForm(HomesType::class, $home);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            if($nouveau){
                $data
                    ->setCreatedat( new \DateTime() )
                    ->setUpdatedat( new \DateTime() )
                    ->setViewcounter(0);
                
            }
            $iframe = $data->getGooglemap();
            $srcIframe= explode('"', $iframe);
            foreach ($srcIframe as $element) {
                if(substr($element, 0, 4) == 'http'){
                    $iframe = $element;
                }
            }
            $data->setGooglemap($iframe);




            $files = $form['pictures']->getData();

            if($files){
                $repertoire = $this->getParameter('imagesHome');
                $images = [];
                foreach ($files as $file) {
                    $filename = rand(1,99999).$file->getClientOriginalName();
                    $file->move($repertoire, $filename);
                    $images[] = $filename;
                }
                
                $data->setPictures($images);
            }
            $em->persist($data);
            $em->flush();
            
            $newId = $data->getId();

            $this->addFlash('success', 'Le bien a été '. ($nouveau ? 'créé' : 'modifié'). '.');

            return $this->redirectToRoute('home', [
                'id' => $newId,
            ]);
        }


        return $this->render('homes/homeCrud.html.twig', [
            'form'=> $form->createView(),
            'nouveau' => $nouveau,
            'home' => $home
        ]);
    }

    /**
     * @Route("/liked-homes", name="likedHomes")
     */
    public function likedHomes()
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $homes = $this->getUser()->getLikes();
        $homesActive = [];

        foreach ($homes as $home) {
            if ($home->getActive() > 0 && $home->getActive() < 3 ){
                $homesActive[] = $home;
            }
        }


        return $this->render('homes/likedHomes.html.twig', [
            'homes' => $homesActive
        ]);
    }

    /**
     * @Route("/like-dislike", name="likeDislike")
     */
    public function likeDislike(Request $request, HomesRepository $homesRepo)
    {
        $em = $this->getDoctrine()->getManager();

        $action = $request->request->get('action');
        $homeId = $request->request->get('id');
        $home = $homesRepo->find($homeId);
        if ($action == 0) {
            $home->addUserslike($this->getUser());
            $like = 1;
        } elseif( $action == 1) {
            $home->removeUserslike($this->getUser());
            $like = 0;
        }
        $em->flush();
        
        $return = [
            'id' => $homeId,
            'like' => $like
        ];

        return $this->json($return);

    }

    /**
     * @Route("/interested/{id}", name="interested")
     */
    public function interested($id, Request $request, HomesRepository $homesRepo)
    {
        //$id is the homeId that we need to pass to the url
        $this->denyAccessUnlessGranted('ROLE_USER');

        $em = $this->getDoctrine()->getManager();

        $home = $homesRepo->findOneBy(
                    ['id' => $id]
                );


        $profil = $this->getUser()->getProfil();
        if(!$profil){
            $profil = new Profils();
        }
        //Vérifier que le profil n'existe pas déjà, sinon l'envoyer au formulaire)

        $demande = new Requests();
        if($profil->getJob()){$demande->setJob($profil->getJob()); }
        if($profil->getContract()){ $demande->setContract($profil->getContract()); }
        if($profil->getSalary()){ $demande->setSalary($profil->getSalary()); }
        if($profil->getNumberresidents()){ $demande->setNumberresidents(intval($profil->getNumberresidents())); }
        if($profil->getAnimals()){$demande->setAnimals($profil->getAnimals()); }
        if($profil->getAge()){$demande->setAge($profil->getAge()); }
        if($profil->getSituation()){$demande->setSituation($profil->getSituation()); }
        if($profil->getGuarantor()){$demande->setGuarantor($profil->getGuarantor());}
        
        //Création du formulaire
        $form = $this->createForm(RequestType::class, $demande);

        //Récupération du formulaire
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $demande = $form->getData();
            $demande
                ->setUser($this->getUser())
                ->setCreatedat( new \DateTime() )
                ->setHome($home)
                ->setRequeststatus(0)
            ;
            
            $profil
                ->setJob($demande->getJob())
                ->setContract($demande->getContract())
                ->setSalary($demande->getSalary())
                ->setNumberresidents($demande->getNumberresidents())
                ->setAnimals($demande->getAnimals())
                ->setAge($demande->getAge())
                ->setSituation($demande->getSituation())
                ->setGuarantor($demande->getGuarantor())
                ->setUser($this->getUser())
            ;

            $this->addFlash('success', 'Nous avons bien reçu votre candidature.');

            $em->persist($profil);
            $em->persist($demande);
            $em->flush();

            return $this->redirectToRoute('home', [
                'id' => $id,
            ]);
        } elseif($form->isSubmitted()){
            $this->addFlash('warning', 'Il y a eu une erreure lors de l\'envoie du formulaire.');
            
            return $this->redirectToRoute('home', [
                'id' => $id,
            ]);
        }

        return $this->render('homes/interested.html.twig', [
            'form' => $form->createView(),
            'userRequest' => $this->getUser()->getHomeRequest($home)
            
        ]);

    }

}