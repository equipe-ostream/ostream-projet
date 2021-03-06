<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PublicController extends AbstractController
{
    /**
     * @Route("/", name="home", methods={"GET", "POST"})
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('public/index.html.twig', []);
    }

}


//voir fichiers ArticleController.php et create.html.twig pour voir comment faire un formulaire qui créé
//automatiquement un objet dans la base de données au moment où on envoie le formulaire + comment le générer sur un
// template twig
// -> Dans un dossier dédié, on aura une fonction qui renverra le fichier twig

// MEILLEURE METHODE = FORM TYPE : VOIR DOCUMENTATION



