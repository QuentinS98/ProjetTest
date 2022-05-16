<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\annotation\Route;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function MaPageDeGarde(): Response
    {
        return $this->render('vinyl/MaPageDeGarde.html.twig', [
            'title' => 'PB& Jams',
        ]);
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