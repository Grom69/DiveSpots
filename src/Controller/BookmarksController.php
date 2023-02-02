<?php

namespace App\Controller;

use App\Entity\Dive;
use App\Repository\DiveRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookmarksController extends AbstractController
{
    #[Route('/dive/{dive}/bookmarks', name: 'app_bookmarks_add')]
    function addToBookmarks(Dive $dive,  DiveRepository $diveRepository, UserRepository $userRepository)
    {

        if (!$dive) {
            throw $this->createNotFoundException(
                'Cette plongée n\'existe pas.'
            );
        }

        /** @var \App\Entity\User */
        $user = $this->getUser();

        $dive = $diveRepository->findOneBy(['id' => $dive]);

        if ($user->isInBookmarks($dive)) {
            $user->removeBookmark($dive);
        } else {
            $user->addBookmark($dive);
        }

        $userRepository->save($user, true);

        return $this->json([
            'isInBookmarks' => $user->isInBookmarks($dive)
        ]);
    }

    #[Route('/dives/bookmarks', name: 'app_bookmarks_show')]
    function showBookmarks(UserRepository $userRepository)
    {
        $user = $userRepository->findOneBy(['id' => $this->getUser()]);

        $bookmarks = $user->getBookmarks();

        return $this->render('bookmarks/bookmarks.html.twig', ['bookmarks' => $bookmarks]);
    }
}
