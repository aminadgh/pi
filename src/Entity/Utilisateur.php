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

    private string $nom;
    #[ORM\Column(length: 255)]

    private string $prenom;
    #[ORM\Column(length: 255)]

    private string $email;
    #[ORM\Column(length: 255)]

    private string $motDePasse;





























    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }
     // Getter et setter pour nom
     public function getNom(): string
     {
         return $this->nom;
     }
 
     public function setNom(string $nom): self
     {
         $this->nom = $nom;
         return $this;
     }
 
     // Getter et setter pour prenom
     public function getPrenom(): string
     {
         return $this->prenom;
     }
 
     public function setPrenom(string $prenom): self
     {
         $this->prenom = $prenom;
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
