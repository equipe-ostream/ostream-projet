<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NombredeconnexionRepository")
 */
class Nombredeconnexion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $television;

    /**
     * @ORM\Column(type="integer")
     */
    private $smartphone;

    /**
     * @ORM\Column(type="integer")
     */
    private $ordinateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelevision(): ?int
    {
        return $this->television;
    }

    public function setTelevision(int $television): self
    {
        $this->television = $television;

        return $this;
    }

    public function getSmartphone(): ?int
    {
        return $this->smartphone;
    }

    public function setSmartphone(int $smartphone): self
    {
        $this->smartphone = $smartphone;

        return $this;
    }

    public function getOrdinateur(): ?int
    {
        return $this->ordinateur;
    }

    public function setOrdinateur(int $ordinateur): self
    {
        $this->ordinateur = $ordinateur;

        return $this;
    }
}
