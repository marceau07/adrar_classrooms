<?php

namespace App\Entity;

use App\Repository\UtilisateursChapitresRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateursChapitresRepository::class)]
class UtilisateursChapitres
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $date_inscription = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $termine = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateursChapitres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateurs $utilisateur = null;

    #[ORM\ManyToOne(inversedBy: 'utilisateursChapitres')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Chapitres $chapitre = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateInscription(): ?\DateTimeImmutable
    {
        return $this->date_inscription;
    }

    public function setDateInscription(\DateTimeImmutable $date_inscription): self
    {
        $this->date_inscription = $date_inscription;

        return $this;
    }

    public function getTermine(): ?int
    {
        return $this->termine;
    }

    public function setTermine(int $termine): self
    {
        $this->termine = $termine;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateurs
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateurs $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    public function getChapitre(): ?Chapitres
    {
        return $this->chapitre;
    }

    public function setChapitre(?Chapitres $chapitre): self
    {
        $this->chapitre = $chapitre;

        return $this;
    }
}
