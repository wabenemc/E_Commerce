<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AProposDeNousController extends AbstractController
{
    #[Route('/a_propos', name: 'app_a_propos_de_nous')]
    public function index(): Response
    {
        return $this->render('a_propos_de_nous/index.html.twig', [
            'controller_name' => 'AProposDeNousController',
        ]);
    }
}
