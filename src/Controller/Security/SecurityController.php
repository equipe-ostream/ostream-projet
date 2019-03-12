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
        $form = $this->createForm(LoginType::class, [
            '_username' => $authUtils->getLastUsername(),
        ]);

        return $this->render('security/login.html.twig', [
            'error' => $authUtils->getLastAuthenticationError(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/login", name="login_admin", methods={"GET", "POST"})
     * @param AuthenticationUtils $authUtils
     * @return Response
     */
    public function adminLogin(Request $request, AuthenticationUtils $authUtils): Response
    {
        $form = $this->createForm(LoginType::class, [
            '_username' => $authUtils->getLastUsername(),
        ]);

        return $this->render('security/login_admin.html.twig', [
            'error' => $authUtils->getLastAuthenticationError(),
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/register", name="register", methods={"GET","POST"})
     * @param Request $request
     * @param SecurityManager $securityManager
     * @return Response
     * @throws \Exception
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
     * @Route("/user/logout", name="logout_user")
     * @Route("/admin/logout", name="logout_admin")
     */
    public function logout()
    {
    }

}