<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreferenceutilisateursmartphoneRepository")
 */
class Preferenceutilisateursmartphone
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $ActiverModeHorsLigne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resolution;

    /**
     * @ORM\Column(type="boolean")
     */
    private $fondEcran;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActiverModeHorsLigne(): ?bool
    {
        return $this->ActiverModeHorsLigne;
    }

    public function setActiverModeHorsLigne(bool $ActiverModeHorsLigne): self
    {
        $this->ActiverModeHorsLigne = $ActiverModeHorsLigne;

        return $this;
    }

    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    public function setResolution(string $resolution): self
    {
        $this->resolution = $resolution;

        return $this;
    }

    public function getFondEcran(): ?bool
    {
        return $this->fondEcran;
    }

    public function setFondEcran(bool $fondEcran): self
    {
        $this->fondEcran = $fondEcran;

        return $this;
    }
}
