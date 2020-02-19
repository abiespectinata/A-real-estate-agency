<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\HomesRepository;
use App\Service\EmailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(HomesRepository $homesRepo )
    {

        $recentHomes = $homesRepo->findBy(
            ['active' => '1'],
            ['updatedat' => 'DESC'],
            6
        );

        $exclusiveHomes = $homesRepo->findExclusiveHomes(6);


        return $this->render('main/index.html.twig', [
            'recenthomes' => $recentHomes,
            'exclusivehomes' => $exclusiveHomes
        ]);

    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, EmailService $emailService)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $contact->setDate(new \DateTime());

            $em = $this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();

            $emailService->contactPro($contact);

            $this->addFlash('success', "Merci nous avons reçu votre message.");
            return $this->redirectToRoute('contact');
        }

        return $this->render('main/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/mentionslegales", name="mentionslegales")
     */
    public function mentionslegales()
    {
        return $this->render('main/mentionslegales.html.twig', [
            // 'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/apropos", name="apropos")
     */
    public function apropos()
    {
        return $this->render('main/apropos.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}