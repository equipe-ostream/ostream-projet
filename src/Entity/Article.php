<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contenu;

    /**
     * @ORM\Column(type="date")
     */
    private $dateCreation;

    /**
     * @var Categorie
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Categorie", cascade={"persist"}, inversedBy="article")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $categorie;

    /**
     * @var Admin
     *
     * @ORM\ManyToOne(targetEntity="Admin", cascade={"persist"}, inversedBy="article")
     * @ORM\JoinColumn(name="admin_id", referencedColumnName="id", onDelete="SET NULL")
     */
    private $admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): void
    {
        $this->contenu = $contenu;
    }

    /**
     * @param Categorie $categorie
     */
    public function setCategorie(?Categorie $categorie): void
    {
        $this->categorie = $categorie;
    }

    /**
     * @return Categorie
     */
    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    /**
     * @param Admin $admin
     */
    public function setAdmin(Admin $admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @return Admin|null
     */
    public function getAdmin(): ?Admin
    {
        return $this->admin;
    }

}
