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
        $tracks = [
            ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
            ['song' => 'Waterfalls', 'artist' => 'TLC'],
            ['song' => 'Creep', 'artist' => 'Radiohead'],
            ['song' => 'Kiss from a Rose', 'artist' => 'Seal'],
            ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
            ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
        ];

        return $this->render('vinyl/MaPageDeGarde.html.twig', [
            'title' => 'PB & Jams',
            'tracks' =>$tracks,
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