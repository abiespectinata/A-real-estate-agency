<?php

namespace App\Form;

use App\Entity\Homes;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\ChoiceList\View\ChoiceView;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;



class SearchHomesType extends AbstractType
{

    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->setMethod('GET')
            ->setAction($this->router->generate('search_homes'))
            ->add('minSurface', IntegerType::class, [
                'label' => 'Surface min (m²)',
                'mapped' => false,
                'required'  => false,
            ])
            ->add('maximumPrice', IntegerType::class, [
                'label' => 'Prix maximum',
                'mapped' => false,
                'required'  => false,
            ])
            ->add('rooms', IntegerType::class, [
                'label' => 'Pièces',
                'mapped' => false,
                'required'  => false,
            ])
            ->add('service', ChoiceType::class, [
                'label' => 'Achat ou Location',
                'attr' => [
                    'placeholder' => 'Choisissez'],
                'choices'  => [
                    'Choisissez' => '',
                    'Achat' => 'Achat',
                    'Location' => 'Location'],
                'required'  => false,
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de bien',
                'choices'  => [
                    'Choisissez' => '',
                    'Maison' => 'Maison',
                    'Appartement' => 'Appartement'],
                'required' => false,
            ])
            ->add('furnished', CheckboxType::class, [
                'label'    => 'Meublé',
                'required' => false,
            ])
        ;
    }
}


    // public function configureOptions(OptionsResolver $resolver)
    // {
    //     $resolver->setDefaults([
    //         // 'data_class' => Homes::class,
    //     ]);
    // }
