<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DispositifRepository")
 */
class Dispositif
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $model;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $date_creation;

    /**
     * @var Live
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Live", cascade={"persist"}, inversedBy="dispositif")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $live;

    /**
     * @var ArrayCollection|Collection
     *
     * @ORM\OneToMany(targetEntity="Formules", mappedBy="dispositif", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $formules;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formules = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->nom .' '. $this->model;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

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
     * @param Live $live
     */
    public function setLive(?Live $live): void
    {
        $this->live = $live;
    }

    /**
     * @return Live
     */
    public function getLive(): ?Live
    {
        return $this->live;
    }
}
