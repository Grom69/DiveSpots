<?php

namespace App\Service;

use App\Repository\DiveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CountryList extends AbstractController
{
    private DiveRepository $diveRepository;

    public function __construct(DiveRepository $diveRepository)
    {
        $this->diveRepository = $diveRepository;
    }

    public function countrylist(): array
    {
        $dives = $this->diveRepository->findAll();

        $countryTable = [];

        foreach ($dives as $dive) {
            $countryTable[] = $dive->getCountry();
        }

        return array_unique($countryTable);
    }
}
