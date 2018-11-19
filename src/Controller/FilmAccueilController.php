<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FilmAccueilController extends AbstractController
{

    public function index()
    {
        return $this->render('film_accueil/index.html.twig', [
            'controller_name' => 'FilmAccueilController',
        ]);
    }
}
