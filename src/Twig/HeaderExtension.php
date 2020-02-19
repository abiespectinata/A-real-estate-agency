<?php

namespace App\Twig;

use App\Repository\HomesRepository;
use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class HeaderExtension extends AbstractExtension
{
    private $twig;
    private $homesRepo;

    public function __construct(Environment $twig, HomesRepository $homesRepo)
    {
        $this->twig = $twig;
        $this->homesRepo = $homesRepo;
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('displayHeader', [$this, 'displayHeader'],['is_safe' => ['html']]),
        ];
    }

    public function displayHeader()
    {
        return $this->twig->render('main/header.html.twig');
    }
}
