<?php

namespace App\Controller;

use App\Repository\DiveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api/dives/{search}', name: 'app_api')]
    public function showAllDivesByCountry(string $search = 'empty', DiveRepository $diveRepository): Response
    {
        if ($search == 'empty') {
            $dives = $diveRepository->findAll();
        } else {
            $dives = $diveRepository->findBy(['country' => $search]);
        }

        $diveTable = [];

        foreach ($dives as $dive) {
            $diveTable[] = [
                'country' => $dive->getCountry(),
                'city' => $dive->getCity(),
                'picture' => $dive->getPicture(),
                'description' => $dive->getDescription(),
                'html' => $this->render(
                    'dive/_dive.html.twig',
                    [
                        'dive' => $dive,
                    ]
                )
            ];
        }

        return $this->json($diveTable);
    }
}
