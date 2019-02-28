<?php

namespace App\Controller\User;

use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DashboardController extends AbstractController
{
    /**
     * @Route("/user/", name="dashboard_user", methods={"GET", "POST"})
     * @return Response
     */
    public function dashboard_user(): Response
    {
        return $this->render('user/index.html.twig', []);
    }

}