<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Services\PasswordService;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;

class AdminController extends EasyAdminController
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
        if (!$entity instanceof Admin) {
            return;
        }

        if ($entity->getPassword()) {
            $entity->setPassword($this->passwordService->encode($entity, $entity->getPassword()));
        }

        $entity->setStatut(Admin::STATUS_ENABLED);
        $entity->setRole('ROLE_SUPER_ADMIN');

        dump($entity);
        die;

        parent::updateEntity($entity);
    }

    /**
     * @param object $entity
     */
    protected function persistEntity($entity)
    {
        if (!$entity instanceof Admin) {
            return;
        }

        if ($entity->getPassword()) {
            $entity->setPassword($this->passwordService->encode($entity, $entity->getPassword()));
        }

        $entity->setStatut(Admin::STATUS_ENABLED);
        $entity->setRole('ROLE_SUPER_ADMIN');

        dump($entity);
        die;

        parent::persistEntity($entity);
    }
}