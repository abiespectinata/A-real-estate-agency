<?php

namespace App\Form;

use App\Entity\Homes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\File;

class HomesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type de bien',
                'choices'  => [
                    'Maison' => 'maison',
                    'Appartement' => 'appartement',
                ],
            ])
            ->add('service', ChoiceType::class, [
                'label' => 'Achat ou Location',
                'choices'  => [
                    'Achat' => 'achat',
                    'Location' => 'location',
                ],
            ])
            ->add('rooms', IntegerType::class, [
                'label' => 'Nombres de pièces'
            ])
            ->add('bedrooms', IntegerType::class, [
                'label' => 'Nombres de chambres*',
                'required' => false
            ])
            ->add('bathrooms', IntegerType::class, [
                'label' => 'Nombres de salles de bain*',
                'required' => false
            ])
            ->add('surface', IntegerType::class, [
                'label' => 'Surface (en m²)'
            ])
            ->add('price', IntegerType::class, [
                'label' => 'Prix (par mois pour les locations)'
            ])
            ->add('adress', TextType::class, [
                'label' => 'Adresse',
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description du bien',
            ])
            ->add('title', TextType::class, [
                'label' => 'Titre de l\'annonce',
            ])
            ->add('active', ChoiceType::class, [
                'label' => 'Disponibilité',
                'choices'  => [
                    'Non disponible' => 0,
                    'Disponible' => 1,
                    'Exclusivité (bientôt disponible)' => 2
                ],
            ])
            ->add('furnished', CheckboxType::class, [
                'label'    => 'Bien meublé',
                'required' => false,
            ])
            ->add('pictures', FileType::class, [
                'label' => 'Photos de la maison*',
                'required' => false,
                'multiple' => true,
                'mapped' => false,
            ])
            ->add('googlemap', TextareaType::class, [
                'label' => 'Lien de GoogleMaps (iframe)',
                'required' => false
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
            'data_class' => Homes::class,
        ]);
    }
}
