<?php

namespace App\Form;

use App\Entity\Requests;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RequestType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('job', ChoiceType::class, [
                'label' => 'Situation professionnelle',
                'required' => true,
                'choices'  => [
                    'Salarié(e) du secteur privé' => 'Salarié',
                    'Fonctionnaire d\'Etat' => 'Fonctionnaire d\'Etat',
                    'Fonctionnaire hospitalier' => 'Fonctionnaire hospitalier',
                    'Fonctionnaire territorial' => 'Fonctionnaire territorial',
                    'Salarié(e) non titulaire de la fonction publique et/ou employé(e) dans un établissement public' => 'Salarié non titulaire de la fonction publique',
                    'Profession libérale' => 'Profession libérale',
                    'Travailleur(se) indépendant(e), artisan, commerçant(e)' => 'Travailleur(se) indépendant(e), artisan, commerçant(e)',
                    'Agriculteur(trice)' => 'Agriculteur',
                    'Sans profession' => 'Sans profession',
                    'Autre' => 'Autre'
                ]
            ])
            ->add('contract', ChoiceType::class, [
                'label' => 'Type de Contrat',
                'required' => true,
                'choices'  => [
                    'CDI' => 'CDI',
                    'CDD' => 'CDD',
                    'Autre (apprenti(e), stagiaire, intérimaire' => 'Autre (apprenti(e), stagiaire, intérimaire',
                    'Sans emploi' => 'Sans emploi'
                ],
            ])
            ->add('salary', IntegerType::class, [
                'label' => 'Salaire brut (/mois)',
                'required' => false
            ])
            ->add('numberresidents', IntegerType::class, [
                'label' => 'Nombre de futurs rédisents dans le foyer',
                'required' => true,
            ])
            ->add('animals', CheckboxType::class, [
                'label'    => 'Avez-vous un(des) animal(aux) de compagnie?',
                'required' => false,
            ])
            ->add('age', IntegerType::class, [
                'label' => 'Age',
                'required' => true,
            ])
            ->add('situation', ChoiceType::class, [
                'label' => 'Situation conjugal',
                'required' => true,
                'choices'  => [
                    'Marié(e)' => 'Marié(e)',
                    'Pacsé(e)' => 'Parcsé(e)',
                    'Divorcé(e)' => 'Divorcé(e)',
                    'Veuf ou veuve' => 'Veuf ou veuve',
                    'En concubinage' => 'Concubinage',
                    'Célibataire' => 'Célibataire'
                ],
            ])
            ->add('guarantor', CheckboxType::class, [
                'label'    => 'Avez-vous un garant (pour une location) ou un apport (pour un achat)',
                'required' => false
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'label' => 'Je m\'engage à ce que les informations fournies soient exactes',
                'mapped' => false,
                'required' => true,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Valider',
                'row_attr' => [
                    'class' => 'text-right'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Requests::class,
        ]);
    }
}
