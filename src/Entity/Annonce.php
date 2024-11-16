<?php

namespace App\Entity;

use App\Repository\AnnonceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnnonceRepository::class)]
class Annonce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idAnnonce = null;

    #[ORM\Column(length: 255)]
    private string $titreAnn;

    #[ORM\Column(length: 3000)]
    private string $contenuAnn;

    #[ORM\Column(type: 'datetime')]
    private \DateTime $datePublication;

    public function getIdAnnonce(): ?int
    {
        return $this->idAnnonce;
    }
}
