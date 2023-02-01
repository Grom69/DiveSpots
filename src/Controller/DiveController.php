<?php

namespace App\Controller;

use App\Service\CountryList;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiveController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    #[Route('/dives', name: 'app_dive')]
    public function index(CountryList $countryList): Response
    {

        $countries = $countryList->countrylist();

        return $this->render('dive/index.html.twig', ['countries' => $countries]);
    }
}
