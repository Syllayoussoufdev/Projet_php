<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BdonneeController extends AbstractController
{
    #[Route('/bdonnee', name: 'app_bdonnee')]
    public function index(): Response
    {
        return $this->render('bdonnee/index.html.twig', [
            'controller_name' => 'BdonneeController',
        ]);
    }
}
