<?php

namespace App\Entity;

use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idUtilisateur = null;

    #[ORM\Column(length: 255)]
    private string $nomUser;

    #[ORM\Column(length: 255)]
    private string $prenomUser;

    #[ORM\Column(length: 255)]
    private string $email;

    #[ORM\Column(length: 255)]
    private string $motDePasse;





























    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    // Getter et setter pour nomUser
    public function getNomUser(): string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): self
    {
        $this->nomUser = $nomUser;
        return $this;
    }

    // Getter et setter pour prenomUser
    public function getPrenomUser(): string
    {
        return $this->prenomUser;
    }

    public function setPrenomUser(string $prenomUser): self
    {
        $this->prenomUser = $prenomUser;
        return $this;
    }

    // Getter et setter pour email
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    // Getter et setter pour motDePasse
    public function getMotDePasse(): string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): self
    {
        $this->motDePasse = $motDePasse;
        return $this;
    }
}