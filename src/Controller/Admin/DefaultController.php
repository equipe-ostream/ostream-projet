<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends AbstractController
{
    /**
     * @Route("/admin", name="dashboard_admin", methods={"GET", "POST"})
     * @return Response
     */
    public function dashboard_admin(): Response
    {
        return $this->render('admin/index.html.twig', []);
    }
}

