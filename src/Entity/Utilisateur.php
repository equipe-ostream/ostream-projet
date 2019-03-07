<?php

namespace App\Entity;

use App\Entity\Traits\DeletableTrait;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur  implements UserInterface
{
    use DeletableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="roles", type="string", length=255)
     */
    private $roles;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Preferenceutilisateurordinateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Preferenceutilisateurordinateurs;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Preferenceutilisateursmartphone")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Preferenceutilisateursmatphones;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Preferenceutilisateurtelevision")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Preferenceutilisateurtelevisions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Live")
     */
    private $lives;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Nombredeconnexion")
     */
    private $nombredeconnexions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Article")
     */
    private $articles;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Interview")
     */
    private $interviews;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Don")
     */
    private $dons;

    public function __construct()
    {
        $this->lives = new ArrayCollection();
        $this->nombredeconnexions = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->interviews = new ArrayCollection();
        $this->dons = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     * @return Utilisateur
     */
    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStatut(): ?string
    {
        return $this->statut;
    }

    /**
     * @param string $statut
     * @return Utilisateur
     */
    public function setStatut(string $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     * @return Utilisateur
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return Utilisateur
     */
    public function setUsername(string $username): Utilisateur
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Set roles
     *
     * @param string $roles
     * @return Utilisateur
     */
    public function setRoles($roles)
    {
        $this->roles = serialize($roles);
        return $this;
    }
    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return unserialize($this->roles);
    }

    /**
     * @return \DateTime
     */
    public function getCreated(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Utilisateur
     */
    public function setCreatedAt(\DateTime $createdAt): Utilisateur
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     * @return Utilisateur
     */
    public function setUpdatedAt(\DateTime $updatedAt): Utilisateur
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {
    }

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @param string $username The username
     *
     * @return UserInterface
     *
     * @throws UsernameNotFoundException if the user is not found
     */
    public function loadUserByUsername($username)
    {
        // TODO: Implement loadUserByUsername() method.
    }
    /**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation to decide if the user data should be
     * totally reloaded (e.g. from the database), or if the UserInterface
     * object can just be merged into some internal array of users / identity
     * map.
     *
     * @param UserInterface $user
     *
     * @return UserInterface
     *
     * @throws UnsupportedUserException if the account is not supported
     */
    public function refreshUser(UserInterface $user)
    {
        // TODO: Implement refreshUser() method.
    }
    /**
     * Whether this provider supports the given user class.
     *
     * @param string $class
     *
     * @return bool
     */
    public function supportsClass($class)
    {
        // TODO: Implement supportsClass() method.
    }

    public function getPreferenceutilisateurordinateurs(): ?Preferenceutilisateurordinateur
    {
        return $this->Preferenceutilisateurordinateurs;
    }

    public function setPreferenceutilisateurordinateurs(?Preferenceutilisateurordinateur $Preferenceutilisateurordinateurs): self
    {
        $this->Preferenceutilisateurordinateurs = $Preferenceutilisateurordinateurs;

        return $this;
    }

    public function getPreferenceutilisateursmatphones(): ?Preferenceutilisateursmartphone
    {
        return $this->Preferenceutilisateursmatphones;
    }

    public function setPreferenceutilisateursmatphones(?Preferenceutilisateursmartphone $Preferenceutilisateursmatphones): self
    {
        $this->Preferenceutilisateursmatphones = $Preferenceutilisateursmatphones;

        return $this;
    }

    public function getPreferenceutilisateurtelevisions(): ?Preferenceutilisateurtelevision
    {
        return $this->Preferenceutilisateurtelevisions;
    }

    public function setPreferenceutilisateurtelevisions(?Preferenceutilisateurtelevision $Preferenceutilisateurtelevisions): self
    {
        $this->Preferenceutilisateurtelevisions = $Preferenceutilisateurtelevisions;

        return $this;
    }

    /**
     * @return Collection|Live[]
     */
    public function getLives(): Collection
    {
        return $this->lives;
    }

    public function addLife(Live $life): self
    {
        if (!$this->lives->contains($life)) {
            $this->lives[] = $life;
        }

        return $this;
    }

    public function removeLife(Live $life): self
    {
        if ($this->lives->contains($life)) {
            $this->lives->removeElement($life);
        }

        return $this;
    }

    /**
     * @return Collection|Nombredeconnexion[]
     */
    public function getNombredeconnexions(): Collection
    {
        return $this->nombredeconnexions;
    }

    public function addNombredeconnexion(Nombredeconnexion $nombredeconnexion): self
    {
        if (!$this->nombredeconnexions->contains($nombredeconnexion)) {
            $this->nombredeconnexions[] = $nombredeconnexion;
        }

        return $this;
    }

    public function removeNombredeconnexion(Nombredeconnexion $nombredeconnexion): self
    {
        if ($this->nombredeconnexions->contains($nombredeconnexion)) {
            $this->nombredeconnexions->removeElement($nombredeconnexion);
        }

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
        }

        return $this;
    }

    /**
     * @return Collection|Interview[]
     */
    public function getInterviews(): Collection
    {
        return $this->interviews;
    }

    public function addInterview(Interview $interview): self
    {
        if (!$this->interviews->contains($interview)) {
            $this->interviews[] = $interview;
        }

        return $this;
    }

    public function removeInterview(Interview $interview): self
    {
        if ($this->interviews->contains($interview)) {
            $this->interviews->removeElement($interview);
        }

        return $this;
    }

    /**
     * @return Collection|Don[]
     */
    public function getDons(): Collection
    {
        return $this->dons;
    }

    public function addDon(Don $don): self
    {
        if (!$this->dons->contains($don)) {
            $this->dons[] = $don;
        }

        return $this;
    }

    public function removeDon(Don $don): self
    {
        if ($this->dons->contains($don)) {
            $this->dons->removeElement($don);
        }

        return $this;
    }
}
