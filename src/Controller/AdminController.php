<?php

namespace App\Controller;

use App\Repository\HomesRepository;
use App\Repository\RequestsRepository;
use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Requests;
use App\Repository\UsersRepository;

class AdminController extends AbstractController
{

    /**
     * @Route("/requests", name="requests")
     */
    public function requests(HomesRepository $homesRepo)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
         
        //Récupération des requêtes pour les envoyer à la vue.
        $homes = $homesRepo->createQueryBuilder('h')
            ->andWhere('h.requests IS NOT EMPTY')
            ->andWhere('h.active in (:active)')
            ->setParameter('active', [1,2])
            ->getQuery()
            ->getResult();

        return $this->render('admin/requests.html.twig', [
            'homes' => $homes
        ]);

    }


    /**
     * @Route("/a/answer-request/{id}", name="answerRequest")
     */
    public function index(Requests $demande, RequestsRepository $demandesRepo, Request $request, EmailService $emailService)
    {

        $em = $this->getDoctrine()->getManager();

        $action = $request->get('action');
        
        if($action == 'accept') {
            $demandes = $demandesRepo->findBy(
                ['home' => $demande->getHome()]
            );
            foreach ($demandes as $d) {
                if ($d != $demande ){
                    $emailService->refuseRequest($d);
                    $d
                        ->setRequeststatus(1)
                        ->setAcceptedat(new \DateTime())
                    ;
                } else {
                    $emailService->acceptRequest($d);
                    $d
                        ->setRequeststatus(1)
                        ->setRefusedat(new \DateTime())
                    ;
                }
            }

            $demande->getHome()->setActive(3);
            $demande->getHome()->setCurrentuser($demande->getUser());
            // $em->flush();

        }

        if($action == 'refuse'){
            $emailService->refuseRequest($demande);
            $demande
                ->setRequeststatus(1)
                ->setRefusedat(new \DateTime())
            ;
            $this->addFlash('success', 'Le mail de refus a bien été envoyé');
        }

        $em->flush();

        return $this->redirectToRoute('requests');
    }


    /**
     * @Route("/a/homes", name="adminHomes")
     */
    public function adminHomes(HomesRepository $homesRepo, Request $request)
    {

        $filter = $request->get('filter');

        if ($filter == 'occupied') {
            $homes = $homesRepo->findOccupiedHomes();
        } else {
            $homes = $homesRepo->findAll();
        }

        return $this->render('admin/adminHomes.html.twig', [
            'homes' => $homes
        ]);
    }

    /**
     * @Route("/a/usersprofils/{id}", name="usersProfil")
     */
    public function usersProfils($id, UsersRepository $usersRepo, Request $request)
    {
        $user = $usersRepo->find($id);

        return $this->render('admin/usersProfil.html.twig', [
            'user' => $user,
        ]);
    }

}
