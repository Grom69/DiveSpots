<?php

namespace App\Controller;

use App\Entity\Dive;
use App\Repository\DiveRepository;
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

    #[Route('/dives/show/{dive}', name: 'app_dive_details')]
    public function showDetails(Dive $dive, DiveRepository $diveRepository): Response
    {
        $dive = $diveRepository->findOneBy(['id' => $dive]);

        return $this->render('dive/show.html.twig', ['dive' => $dive]);
    }
}
