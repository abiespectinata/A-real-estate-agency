<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class EmailService{

    private $mailer;
    private $parameters;

    public function __construct(MailerInterface $mailer, ParameterBagInterface $parameters){
        $this->mailer = $mailer;
        $this->mon_email = 'demo.wf3.victor@gmail.com';
        $this->parameters = $parameters;
        $this->data = array(
            'from' => false,
            'to' => false,
            'replyTo' => false,
            'subject' => false,
            'template' => false,
            'attachFromPath' => NULL,
            'context'=> false,
        );
    }

    public function send($data)
    {

        $data = array_merge($this->data, $data);
        if(!$data['from']){
            $data['from'] = $_ENV['MY_EMAIL'];
        }

        if(!$data['to']){
            $data['to'] = $_ENV['MY_EMAIL'];
        }

        if(!$data['replyTo']){
            $data['replyTo'] = $data['from'];
        }

        //Renvoyer tous les mails sur mon adresse quand on est en dev
        if($_ENV['APP_ENV'] == 'dev'){
            $data['to'] = $_ENV['MY_EMAIL'];
        }


        $mail = (new TemplatedEmail())
            ->from($data['from'])
            ->to($data['to'])
            ->replyTo($data['replyTo'])
            ->subject($data['subject'])
            ->htmlTemplate($data['template'])
            ->context($data['context'])
        ;

        if ($data['attachFromPath']) {
            $mail->attachFromPath($data['attachFromPath']);
        }

        $this->mailer->send($mail);
    }

    public function acceptRequest($demande){

        $data = array(
            'from' => $demande->getUser()->getEmail(),
            'subject' => 'Réponse concernant une demande sur Agence Immo',
            'template' => 'emails/requests/accept.email.twig',
            'context' => array(
                'demande' => $demande
            )
        );

        $this->send($data);
    }

    public function refuseRequest($demande){

        $data = array(
            'from' => $demande->getUser()->getEmail(),
            'subject' => 'Réponse concernant une demande sur Agence Immo',
            'template' => 'emails/requests/refuse.email.twig',
            'context' => array(
                'demande' => $demande
            )
        );

        $this->send($data);
    }


    public function contactPro($params){
        $data = array(
            'from' => $params->getEmail(),
            'subject' => $params->getPrenom().' '.$params->getNom(). ' '. $params->getSujet(),
            'template' => 'emails/contact_pro.email.twig',
            'context' => array(
                'contactPro' => $params
            )
        );

        $this->send($data);
    }

    public function contactBien($params){
        $data = array(
            'from' => $params['email'],
            'subject' => 'Contact au sujet du bien #'.$params['homeid'],
            'template' => 'emails/contact_home.email.twig',
            'context' => array(
                'mailHome' => $params
            )
        );
        
        $this->send($data);
    }


    public function register($user)
    { 
        $data = array(
            'to' => $user->getEmail(),
            'subject' => "Confirmez votre inscription",
            'template' => 'emails/security/register.email.twig',
            'context' => ['user' => $user]
        );

        $this->send($data);
    }


    public function password_forgotten($user, $link){
        $data = array(
            'to'=> $user->getEmail(),
            'subject' => 'Modifier votre mot de passe',
            'template' => 'emails/security/password_forgotten.email.twig',
            'context' => ['user' => $user, 'link' => $link]
        );
        $this->send($data);
    }
    
}