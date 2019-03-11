<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PreferencesRepository")
 */
class Preferences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $activeModeHorsligne;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $resolution;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tempsAttenteAvantDiffusion;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $fondEcran;

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->id .' - Resolution: '.$this->resolution;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActiveModeHorsligne(): ?bool
    {
        return $this->activeModeHorsligne;
    }

    public function setActiveModeHorsligne(?bool $activeModeHorsligne): void
    {
        $this->activeModeHorsligne = $activeModeHorsligne;
    }

    public function getResolution(): ?int
    {
        return $this->resolution;
    }

    public function setResolution(?int $resolution): void
    {
        $this->resolution = $resolution;
    }

    public function getTempsAttenteAvantDiffusion(): ?int
    {
        return $this->tempsAttenteAvantDiffusion;
    }

    public function setTempsAttenteAvantDiffusion(?int $tempsAttenteAvantDiffusion): void
    {
        $this->tempsAttenteAvantDiffusion = $tempsAttenteAvantDiffusion;
    }

    public function getFondEcran(): ?bool
    {
        return $this->fondEcran;
    }

    public function setFondEcran(?bool $fondEcran): void
    {
        $this->fondEcran = $fondEcran;
    }
}
