<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbonnementRepository")
 */
class Abonnement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_creation;

    /**
     * @var Formules
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Formules", cascade={"persist"}, inversedBy="abonnement")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $formules;

    /**
     * @var Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur", cascade={"persist"}, inversedBy="abonnement")
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $utilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(?\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * @param Formules $formules
     */
    public function setFormules(?Formules $formules): void
    {
        $this->formules = $formules;
    }

    /**
     * @return Formules
     */
    public function getFormules(): ?Formules
    {
        return $this->formules;
    }

    /**
     * @param Utilisateur $utilisateur
     */
    public function setUtilisateur(Utilisateur $utilisateur): void
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return Utilisateur|null
     */
    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }
}
