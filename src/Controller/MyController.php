<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\annotation\Route;
use function Symfony\Component\String\u;

class MyController
{
    #[Route('/')]
    public function MaPageDeGarde()
    {
        return new Response('Title : "Mon serveur test"');
    }

    #[Route('/browse/{slug}')]
    public function browse($slug = null): Response
    {
        if ($slug) {
            //$title = str_replace('-',' ', $slug);
            $title = 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true);
        }
        else{
            $title = 'All Genders';
        }
        return new Response($title);
    }
}