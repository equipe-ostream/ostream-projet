<?php

namespace App\Controller\User;

use App\Entity\Preferences;
use App\Entity\Utilisateur;
use App\Form\PreferencesType;
use App\Repository\PreferencesRepository;
use App\Services\MessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreferencesController extends AbstractController
{
    /**
     * @Route("/user/preference/{id}", name="preferences_show", methods={"GET"})
     */
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('user/preferences/show.html.twig', [
            'preference' => $utilisateur->getPreferences(),
        ]);
    }

    /**
     * @Route("/user/preference/{id}/edit", name="preferences_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Utilisateur $utilisateur
     * @param MessageService $messageService
     * @return Response
     */
    public function edit(Request $request, Utilisateur $utilisateur, MessageService $messageService): Response
    {
        $form = $this->createForm(PreferencesType::class, $utilisateur->getPreferences());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $messageService->addSuccess('Vos informations ont bien été prises en compte.');

            return $this->redirectToRoute('preferences_edit', [
                'id' => $utilisateur->getId(),
            ]);
        }

        return $this->render('user/preferences/edit.html.twig', [
            'preference' => $utilisateur->getPreferences(),
            'form' => $form->createView(),
        ]);
    }
}
