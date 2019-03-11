<?php

namespace App\Controller\User;

use App\Entity\Don;
use App\Entity\Utilisateur;
use App\Form\DonType;
use App\Repository\DonRepository;
use App\Services\MessageService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DonController extends AbstractController
{
    /**
     * @Route("/user/don/{id}/list", name="don_user", methods={"GET"})
     * @param Utilisateur $utilisateur
     * @param DonRepository $donRepository
     * @return Response
     */
    public function list(Utilisateur $utilisateur, DonRepository $donRepository): Response
    {
        return $this->render('user/don/index.html.twig', [
            'dons' => $donRepository->findByUtilisateur($utilisateur),
        ]);
    }

    /**
     * @Route("/user/don/create", name="don_new", methods={"GET","POST"})
     * @param Request $request
     * @param MessageService $messageService
     * @return Response
     */
    public function new(Request $request, MessageService $messageService): Response
    {
        $don = new Don();
        $form = $this->createForm(DonType::class, $don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $don->setUtilisateur($this->getUser());
            $entityManager->persist($don);
            $entityManager->flush();

            $messageService->addSuccess('Merci pour votre don.');

            return $this->redirectToRoute('don_user', ['id' => $this->getUser()->getId()]);
        }

        return $this->render('user/don/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
