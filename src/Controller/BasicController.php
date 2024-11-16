<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;  // Assure-toi que tu utilises bien l'annotation correcte

class BasicController extends AbstractController
{
    #[Route('/basic', name: 'app_basic')]
    public function index(): Response
    {
        return $this->render('basic/index.html.twig', [
            'controller_name' => 'BasicController',
        ]);
    }
}
