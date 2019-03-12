<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LiveRepository")
 */
class Live
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
    private $ocean;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $resolution;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays;

    /**
     * @var ArrayCollection|Collection
     *
     * @ORM\OneToMany(targetEntity="Dispositif", mappedBy="live", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $dispositif;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->dispositif = new ArrayCollection();
    }

    /**
     * return mixed
     */
    public function __toString()
    {
        return $this->ocean;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOcean(): ?string
    {
        return $this->ocean;
    }

    public function setOcean(string $ocean): self
    {
        $this->ocean = $ocean;

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

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
