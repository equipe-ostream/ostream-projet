<?php

namespace App\Controller\User;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use App\Services\MessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/user/profil/{id}", name="show_profil", methods={"GET"})
     * @param Utilisateur $utilisateur
     * @return Response
     */
    public function show(Utilisateur $utilisateur): Response
    {
        return $this->render('user/profil/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    /**
     * @Route("/user/profil/{id}/edit", name="edit_profil", methods={"GET","POST"})
     * @param Request $request
     * @param Utilisateur $utilisateur
     * @param MessageService $messageService
     * @return Response
     */
    public function edit(
        Request $request,
        Utilisateur $utilisateur,
        MessageService $messageService
    ): Response {
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            $messageService->addSuccess('Vos informations ont bien été prises en compte.');

            return $this->redirectToRoute('edit_profil', [
                'id' => $utilisateur->getId(),
            ]);
        }

        return $this->render('user/profil/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }
}
