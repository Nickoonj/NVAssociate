<?php 
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('twig_json_decode', [$this, 'twig_json_decode']),
        ];
    }

    public function twig_json_decode($json)
    {
        return json_decode($json, true);
    }
}