<?php

namespace App\Entity;

use App\Repository\ChapitreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChapitreRepository::class)]
class Chapitre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $idChapitre = null;

    #[ORM\Column(length: 255)]
    private string $titreChap;

    #[ORM\Column(length: 10000)]
    private string $contenuChap;

    #[ORM\Column(type: "integer")]
    private int $ordre;

    public function getIdChapitre(): ?int
    {
        return $this->idChapitre;
    }
}
