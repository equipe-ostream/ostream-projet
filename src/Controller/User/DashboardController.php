<?php

namespace App\Controller\User;

use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DashboardController extends AbstractController
{
    /**
     * @Route("/user", name="dashboard_user", methods={"GET","POST"})
     * @Security("is_granted(constant('\\App\\Security\\Voter\\UserVoter::USER_VIEW'))")
     * @return Response
     */
    public function dashboard() {

        return $this->render( 'user/index.html.twig');
    }

    /**
     * @Route("/user/projets", name="projets", methods={"GET","POST"})
     * @return Response
     */
    public function projets() {
        return $this->render( 'user/projet/index.html.twig');
    }

}