<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormuleAbonnementRepository")
 */
class FormuleAbonnement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $prixAbonnement;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Nombredeconnexion", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Nombredeconnexion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrixAbonnement(): ?float
    {
        return $this->prixAbonnement;
    }

    public function setPrixAbonnement(float $prixAbonnement): self
    {
        $this->prixAbonnement = $prixAbonnement;

        return $this;
    }

    public function getNombredeconnexion(): ?Nombredeconnexion
    {
        return $this->Nombredeconnexion;
    }

    public function setNombredeconnexion(Nombredeconnexion $Nombredeconnexion): self
    {
        $this->Nombredeconnexion = $Nombredeconnexion;

        return $this;
    }
}
