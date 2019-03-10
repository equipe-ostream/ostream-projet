<?php

namespace App\Manager;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use App\Services\MessageService;
use App\Services\PasswordService;
use Doctrine\ORM\EntityManagerInterface;

class SecurityManager
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var \Twig_Environment
     */
    protected $templating;

    /**
     * @var PasswordService
     */
    protected $passwordService;

    /**
     * @var MessageService
     */
    protected $messageService;

    /**
     * @var UtilisateurRepository
     */
    protected $utilisateurRepository;

    /**
     * SecurityManager constructor.
     * @param EntityManagerInterface $entityManager
     * @param \Twig_Environment $templating
     * @param PasswordService $passwordService
     * @param MessageService $messageService
     * @param UtilisateurRepository $utilisateurRepository
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        \Twig_Environment $templating,
        PasswordService $passwordService,
        MessageService $messageService,
        UtilisateurRepository $utilisateurRepository
    )
    {
        $this->em = $entityManager;
        $this->templating = $templating;
        $this->passwordService = $passwordService;
        $this->messageService = $messageService;
        $this->utilisateurRepository = $utilisateurRepository;
    }

    /**
     * @param Utilisateur $user
     * @return mixed
     * @throws \Exception
     */
    public function registerUtilisateur(Utilisateur $user)
    {
        if (count($this->utilisateurRepository->findBy(["email"=>$user->getEmail()])) !== 0) {
            return $this->messageService->addError('Cette adresse e-mail est déjà utilisée');
        }

        $user->setRoles(['ROLE_USER']);
        $user->setCreatedAt(new \DateTime());
        $user->setUpdatedAt(new \DateTime());
        $this->em->persist($user);
        $this->em->flush();

        return $this->messageService->addSuccess('Vos informations ont bien été prises en compte.');
    }
}
