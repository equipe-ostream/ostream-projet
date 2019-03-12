<?php

namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use App\Services\PasswordService;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;

class UserController extends EasyAdminController
{
    /**
     * @var PasswordService
     */
    private $passwordService;

    /**
     * @param PasswordService $passwordService
     */
    public function __construct(PasswordService $passwordService)
    {
        $this->passwordService = $passwordService;
    }

    /**
     * @param object $entity
     */
    protected function updateEntity($entity)
    {
        if (!$entity instanceof Utilisateur) {
            return;
        }

        if ($entity->getPassword()) {
            $entity->setPassword($this->passwordService->encode($entity, $entity->getPassword()));
        }

        $entity->setStatut(Utilisateur::STATUS_ENABLED);
        $entity->setRole('ROLE_USER');

        parent::updateEntity($entity);
    }

    /**
     * @param object $entity
     */
    protected function persistEntity($entity)
    {
        if (!$entity instanceof Utilisateur) {
            return;
        }

        if ($entity->getPassword()) {
            $entity->setPassword($this->passwordService->encode($entity, $entity->getPassword()));
        }

        $entity->setStatut(Utilisateur::STATUS_ENABLED);
        $entity->setRole('ROLE_USER');

        parent::persistEntity($entity);
    }
}