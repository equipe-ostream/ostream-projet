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
     * @Route("/user", name="dashboard_user", methods={"GET","POST"})
     * @return Response
     */
    public function dashboard() {

        return $this->render( 'user/index.html.twig');
    }

    /**
     * @Route("/user/Profil", name="user_profil", methods={"GET","POST"})
     * @return Response
     */
    public function profil() {

        return $this->render( 'security/UserProfil.html.twig');
    }

    /**
     * @Route("/user/Flux", name="flux", methods={"GET","POST"})
     * @return Response
     */
    public function flux() {

        return $this->render( 'security/UserFlux.html.twig');
    }

    /**
     * @Route("/user/projets", name="projets", methods={"GET","POST"})
     * @return Response
     */
    public function projets() {

        return $this->render( 'security/UserProjets.html.twig');
    }

}