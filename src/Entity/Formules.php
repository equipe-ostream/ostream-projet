<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormulesRepository")
 */
class Formules
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prix;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $connection;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_creation;

    /**
     * @var Dispositif
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Dispositif", cascade={"persist"}, inversedBy="formules")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $dispositif;

    /**
     * @var ArrayCollection|Collection
     *
     * @ORM\OneToMany(targetEntity="Abonnement", mappedBy="formules", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $abonnement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->abonnement = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->prix .'€ - '.$this->connection. ' Ecran';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(?int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getConnection(): ?int
    {
        return $this->connection;
    }

    public function setConnection(?int $connection): self
    {
        $this->connection = $connection;

        return $this;
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
     * @param Dispositif $dispositif
     */
    public function setDispositif(?Dispositif $dispositif): void
    {
        $this->dispositif = $dispositif;
    }

    /**
     * @return Dispositif
     */
    public function getDispositif(): ?Dispositif
    {
        return $this->dispositif;
    }
}
