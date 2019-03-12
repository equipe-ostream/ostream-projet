<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SystemeRepository")
 */
class Systeme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $blockProjet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $blockEquipe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $blockFlux;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBlockProjet(): ?string
    {
        return $this->blockProjet;
    }

    public function setBlockProjet(?string $blockProjet): self
    {
        $this->blockProjet = $blockProjet;

        return $this;
    }

    public function getBlockEquipe(): ?string
    {
        return $this->blockEquipe;
    }

    public function setBlockEquipe(?string $blockEquipe): self
    {
        $this->blockEquipe = $blockEquipe;

        return $this;
    }

    public function getBlockFlux(): ?string
    {
        return $this->blockFlux;
    }

    public function setBlockFlux(?string $blockFlux): self
    {
        $this->blockFlux = $blockFlux;

        return $this;
    }
}
