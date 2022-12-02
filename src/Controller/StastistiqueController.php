<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StastistiqueController extends AbstractController
{
    #[Route('/stastistique', name: 'app_stastistique')]
    public function index(): Response
    {
        return $this->render('stastistique/index.html.twig', [
            'controller_name' => 'StastistiqueController',
        ]);
    }
}
