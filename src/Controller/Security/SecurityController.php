<?php

namespace App\Controller\Security;

use App\Entity\Utilisateur;
use App\Form\Security\LoginType;
use App\Form\Security\RegisterType;
use App\Manager\SecurityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/user/login", name="login", methods={"GET", "POST"})
     * @param AuthenticationUtils $authUtils
     * @return Response
     */
    public function user(AuthenticationUtils $authUtils): Response
    {
        if ($this->getUser() instanceof Utilisateur) {
            return $this->redirectToRoute('dashboard_user');
        }

        $form = $this->createForm(LoginType::class, [
            '_username' => $authUtils->getLastUsername(),
        ]);

        return $this->render('security/login.html.twig', [
            'error' => $authUtils->getLastAuthenticationError(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/register", name="register", methods={"GET","POST"})
     * @param Request $request
     * @param SecurityManager $securityManager
     * @return Response
     */
    public function registerUser(
        Request $request,
        SecurityManager $securityManager
    ) {
        $user = new Utilisateur();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $securityManager->registerUtilisateur($user);
        }

        return $this->render('security/register.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/userDashboard", name="userDashboard", methods={"GET","POST"})
     * @return Response
     */
    public function userDashboard() {

        return $this->render( 'security/UserDashBoard.html.twig');
    }
}