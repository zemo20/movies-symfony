<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'movies')]
    public function index()
    {
        $movies = ['Avengers: End Game', 'Inception', 'Loki', 'Black Widow'];
        return $this->render('index.html.twig', [
            'movies' => $movies
        ]);
    }
}
