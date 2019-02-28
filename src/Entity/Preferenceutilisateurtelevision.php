<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreferenceutilisateurtelevisionRepository")
 */
class Preferenceutilisateurtelevision
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
    private $activerModeHorsLigne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resolution;

    /**
     * @ORM\Column(type="time")
     */
    private $tempsAttenteAvantDiffusion;

    /**
     * @ORM\Column(type="time")
     */
    private $dureeDiffusion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActiverModeHorsLigne(): ?bool
    {
        return $this->activerModeHorsLigne;
    }

    public function setActiverModeHorsLigne(bool $activerModeHorsLigne): self
    {
        $this->activerModeHorsLigne = $activerModeHorsLigne;

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

    public function getTempsAttenteAvantDiffusion(): ?\DateTimeInterface
    {
        return $this->tempsAttenteAvantDiffusion;
    }

    public function setTempsAttenteAvantDiffusion(\DateTimeInterface $tempsAttenteAvantDiffusion): self
    {
        $this->tempsAttenteAvantDiffusion = $tempsAttenteAvantDiffusion;

        return $this;
    }

    public function getDureeDiffusion(): ?\DateTimeInterface
    {
        return $this->dureeDiffusion;
    }

    public function setDureeDiffusion(\DateTimeInterface $dureeDiffusion): self
    {
        $this->dureeDiffusion = $dureeDiffusion;

        return $this;
    }
}
