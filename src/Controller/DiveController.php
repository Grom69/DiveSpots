<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiveController extends AbstractController
{
    #[Route('/dives', name: 'app_dive')]
    public function index(): Response
    {
        return $this->render('dive/index.html.twig', []);
    }
}
