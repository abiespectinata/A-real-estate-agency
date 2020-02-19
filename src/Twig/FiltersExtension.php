<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class FiltersExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // If your filter generates SAFE HTML, you should add a third
            // parameter: ['is_safe' => ['html']]
            // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
            new TwigFilter('price', [$this, 'formatPrice']),
            new TwigFilter('beginingDescription', [$this, 'getBeginingDescription'],['is_safe' => ['html']]),
        ];
    }

    public function formatPrice($number)
    {
        $price = number_format($number, 0, ',', ' ');
        return $price;
    }

    public function getBeginingDescription($text)
    {
        $description = explode(' ', $text, 21);
        unset($description[20]);
        return implode(' ', $description).'...';
    }
}
