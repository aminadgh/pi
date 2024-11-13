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

    private string $nom;

    private string $prenom;

    private string $email;

    private string $motDePasse;





























    public function getId(): ?int
    {
        return $this->id;
    }
    
}
