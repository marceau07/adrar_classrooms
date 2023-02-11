<?php

namespace App\Entity;

use App\Repository\UtilisateursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
#[ORM\Table(name: '`utilisateurs`')]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Utilisateurs implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;
    
    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;
    
    /**
     * @var string The hashed password
     */
    #[ORM\Column(length: 255)]
    private ?string $motDePasse = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: Avis::class, orphanRemoval: true)]
    private Collection $avis;

    #[ORM\OneToMany(mappedBy: 'utilisateur', targetEntity: UtilisateursChapitres::class, orphanRemoval: true)]
    private Collection $utilisateursChapitres;

    public function __construct()
    {
        $this->avis = new ArrayCollection();
        $this->utilisateursChapitres = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
    
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $password): self
    {
        $this->motDePasse = $password;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }
    
    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Avis>
     */
    public function getAvis(): Collection
    {
        return $this->avis;
    }

    public function addAvi(Avis $avi): self
    {
        if (!$this->avis->contains($avi)) {
            $this->avis->add($avi);
            $avi->setUtilisateur($this);
        }

        return $this;
    }

    public function removeAvi(Avis $avi): self
    {
        if ($this->avis->removeElement($avi)) {
            // set the owning side to null (unless already changed)
            if ($avi->getUtilisateur() === $this) {
                $avi->setUtilisateur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, UtilisateursChapitres>
     */
    public function getUtilisateursChapitres(): Collection
    {
        return $this->utilisateursChapitres;
    }

    public function addUtilisateursChapitre(UtilisateursChapitres $utilisateursChapitre): self
    {
        if (!$this->utilisateursChapitres->contains($utilisateursChapitre)) {
            $this->utilisateursChapitres->add($utilisateursChapitre);
            $utilisateursChapitre->setUtilisateur($this);
        }

        return $this;
    }

    public function removeUtilisateursChapitre(UtilisateursChapitres $utilisateursChapitre): self
    {
        if ($this->utilisateursChapitres->removeElement($utilisateursChapitre)) {
            // set the owning side to null (unless already changed)
            if ($utilisateursChapitre->getUtilisateur() === $this) {
                $utilisateursChapitre->setUtilisateur(null);
            }
        }

        return $this;
    }
}
