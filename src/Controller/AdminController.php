<?php

namespace App\Controller;

use App\Entity\Dive;
use App\Form\DiveType;
use App\Repository\DiveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/dive')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_dive_index', methods: ['GET'])]
    public function index(DiveRepository $diveRepository): Response
    {
        return $this->render('admin/index.html.twig', [
            'dives' => $diveRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_dive_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DiveRepository $diveRepository): Response
    {
        $dive = new Dive();
        $form = $this->createForm(DiveType::class, $dive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $diveRepository->save($dive, true);

            return $this->redirectToRoute('app_dive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/new.html.twig', [
            'dive' => $dive,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dive_show', methods: ['GET'])]
    public function show(Dive $dive): Response
    {
        return $this->render('admin/show.html.twig', [
            'dive' => $dive,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_dive_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Dive $dive, DiveRepository $diveRepository): Response
    {
        $form = $this->createForm(DiveType::class, $dive);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $diveRepository->save($dive, true);

            return $this->redirectToRoute('app_dive_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/edit.html.twig', [
            'dive' => $dive,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_dive_delete', methods: ['POST'])]
    public function delete(Request $request, Dive $dive, DiveRepository $diveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $dive->getId(), $request->request->get('_token'))) {
            $diveRepository->remove($dive, true);
        }

        return $this->redirectToRoute('app_dive_index', [], Response::HTTP_SEE_OTHER);
    }
}
